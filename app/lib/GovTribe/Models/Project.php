<?php namespace GovTribe\Models;

use GovTribe\Traits\Strings;

class Project extends APIEntity {

	use Strings;

	protected $connection = 'databot';
	protected $collection = 'projects';

	// Get all of the project's files in a slightly modified format
	public function getFilesAttribute($value)
	{
		$output = [];

		if ($value)
		{
			$output = [];

			foreach ($value as $packageGroup)
			{
				foreach ($packageGroup as $packageName => $packageDetails)
				{
					foreach ($packageDetails as &$packageDetailItem)
					{
						if (!isset($packageDetailItem['uri'])) continue;
						$packageDetailItem = [
							'fileURI' => $packageDetailItem['uri'],
							'fileName' => isset($packageDetailItem['name']) ? $packageDetailItem['name'] : 'Not Available',
							'fileDescription' => isset($packageDetailItem['description']) ? $packageDetailItem['description'] : 'Not Available',
						];
					}
					
					$output[] = [
						'packageName' => $packageName,
						'packageDetails' => $packageDetails,
					];
				}
			}
		}

		return $output;
	}

	// Get the project's class codes as an array
	public function getClassCodesAttribute()
	{
		$output = [];

		if (isset($this->attributes['classCode']))
		{
			$output = [$this->attributes['classCode']];
		}

		return $output;
	}

	// Get all of the project's synopsis by loading its raws
	public function getSynopsisCollectionAttribute()
	{
		$synopsisCollection = [];

		foreach ($this->attributes['raws'] as $NTI)
		{
			$raw = $this->getConnection()->getCollection('raws')->findOne(['_id' => $NTI['_id']], ['data.synopsis']);

			if (isset($raw['data']['synopsis']))
			{
				if ($cleaned = $this->cleanDirtyHTML($raw['data']['synopsis']))
				{
					$synopsisCollection[] = str_limit($cleaned, 15000);
				}
			}
		}

		return $synopsisCollection;
	}

	// Get all the project's synopsis attribute
	public function getSynopsisAttribute($value)
	{
		return $this->cleanDirtyHTML($value);
	}

	// Get all the project's sourceLinks attribute
	public function getSourceLinksAttribute($value)
	{
		$output = [];

		if (isset($this->attributes['sourceLink'])) $output[] = $this->attributes['sourceLink'];

		return $output;
	}

	public function getNameAttribute($value)
	{
		// Remove leading NAICS/Class code.
		$name = $value;
		$name = preg_replace("#^.*--#", '', $name);

		// Trim
		$name = trim($name);

		return $name;
	}

	protected function getPredictedCompetitionAttribute()
	{
		$output = [];

		$edges = \DB::connection('graph')->getCollection('edges');

		$relatedNodes = array_merge(
			$this->attributes['agencies'], 
			$this->attributes['offices'],
			$this->attributes['people']
		);

		$queries = [];
		foreach ($relatedNodes as $NTI)
		{
			if ($this->attributes['classCode'])
			{
				$val = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $this->attributes['classCode']));
				$queries[] = new \MongoRegex('/^' . $NTI['type'] . '\\|' . $NTI['_id'] . '\\|vendor\\|project\\|cc\\|' . $val . '/');
			}

			if ($this->attributes['NAICS'])
			{
				$val = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $this->attributes['NAICS']));
				$queries[] = new \MongoRegex('/^' . $NTI['type'] . '\\|' . $NTI['_id'] . '\\|vendor\\|project\\|na\\|' . $val . '/');
			}

			if ($this->attributes['setAsideType'])
			{
				$val = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $this->attributes['setAsideType']));
				$queries[] = new \MongoRegex('/^' . $NTI['type'] . '\\|' . $NTI['_id'] . '\\|vendor\\|project\\|sa\\|' . $val . '/');
			}

		}

		$pipeline = [
			['$match' => ['_id' => ['$in' => $queries]]],
			['$project' => ['ts' => 1, '_id' => 0]],
			['$unwind' => '$ts'],
			['$group' => ['_id' => '$ts', 'c' => ['$sum' => 1]]],
			['$sort' => ['c' => -1]],
			['$limit' => 5],
		];

		$agg = $edges->aggregate($pipeline);

		if (!isset($agg['result']) || empty($agg['result']))
		{
			return [];
		}
		else
		{
			foreach ($agg['result'] as &$vendor)
			{
				$vendor = \GovTribe\Models\Vendor::find($vendor['_id'], ['name']);

				$vendor = [
					'name' => $vendor->name,
					'type' => 'vendor',
					'_id' => $vendor['_id'],
				];
			}

			return $agg['result'];
		}
	}
}
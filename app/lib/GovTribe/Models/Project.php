<?php namespace GovTribe\Models;

use GovTribe\Traits\Strings;
use GovTribe\Transformers\ProjectTransformer;

class Project extends APIEntity {

	use Strings;

	protected $connection = 'databot';
	protected $collection = 'projects';

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
					if (!$packageDetails) continue;

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

	public function getWorkflowStatusAttribute()
	{
		if (isset($this->attributes['workflowStatus']['workflowStatus']))
		{
			return $this->attributes['workflowStatus']['workflowStatus'];
		}
		else return null;
	}

	public function getClassCodesAttribute()
	{
		$output = [];

		if (isset($this->attributes['classCode']))
		{
			$output = [$this->attributes['classCode']];
		}

		return $output;
	}

	public function getImportantDatesAttribute()
	{
		$forecast = ProjectTransformer::NULL_TEXT;
		$presolicitationPosting = ProjectTransformer::NULL_TEXT;
		$presolicitationDue = ProjectTransformer::NULL_TEXT;
		$solicitationPosting = ProjectTransformer::NULL_TEXT;
		$solicitationDue = ProjectTransformer::NULL_TEXT;
		$award = ProjectTransformer::NULL_TEXT;
		$contractEnd = ProjectTransformer::NULL_TEXT;
		$basePeriodEnd = ProjectTransformer::NULL_TEXT;
		$optionPeriodEnd = ProjectTransformer::NULL_TEXT;

		if (isset($this->attributes['dueDatesByStatus']))
		{
			$ddbs = $this->attributes['dueDatesByStatus'];

			if (isset($ddbs[0]['date'])) $presolicitationDue = $ddbs[0]['date'];
			if (isset($ddbs[1]['date'])) $solicitationDue = $ddbs[1]['date'];
		}

		return [
			[
				'dateType' => 'Forecast',
				'date' => $forecast,
				'valueSource' => 'Sourced',
			],
			[
				'dateType' => 'Presolicitation Posting',
				'date' => $presolicitationPosting,
				'valueSource' => 'Sourced',
			],
			[
				'dateType' => 'Presolicitation Due',
				'date' => $presolicitationDue,
				'valueSource' => 'Sourced',
			],
			[
				'dateType' =>  'Solicitation Posting',
				'date' => $solicitationPosting,
				'valueSource' => 'Sourced',
			],
			[
				'dateType' => 'Solicitation Due',
				'date' => $solicitationDue,
				'valueSource' => 'Sourced',
			],
			[
				'dateType' => 'Award',
				'date' => $award,
				'valueSource' => 'Sourced',
			],
			[
				'dateType' => 'Contract End',
				'date' => $contractEnd,
				'valueSource' => 'Sourced',
			],
			[
				'dateType' => 'Base Period End',
				'date' => $basePeriodEnd,
				'valueSource' => 'Sourced',
			],
			[
				'dateType' => 'Option Period End',
				'date' => $optionPeriodEnd,
				'valueSource' => 'Sourced',
			]
		];
	}

	public function getSynopsisCollectionAttribute()
	{
		$synopsisCollection = [];

		if (!isset($this->attributes['raws'])) return $synopsisCollection;

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

		if (!isset($this->attributes['agencies'])) return $output;
		if (!isset($this->attributes['offices'])) return $output;
		if (!isset($this->attributes['people'])) return $output;
		if (!isset($this->attributes['categories'])) return $output;

		$relatedNodes = array_merge(
			$this->attributes['agencies'], 
			$this->attributes['offices'],
			$this->attributes['people'],
			$this->attributes['categories']
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
			['$group' => ['_id' => '$ts', 'intersects' => ['$sum' => 1]]],
			['$sort' => ['intersects' => -1]],
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
				$intersects = $vendor['intersects'];
				$vendor = \GovTribe\Models\Vendor::find($vendor['_id'], ['name']);

				if ($intersects < 5 || !$vendor)
				{
					$vendor = false;
					continue;
				}

				$vendor = [
					'name' => $vendor->name,
					'type' => 'vendor',
					'_id' => $vendor->_id,
					'intersects' => $intersects,
				];
			}

			return array_values(array_filter($agg['result']));
		}
	}
}
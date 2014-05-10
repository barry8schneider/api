<?php namespace GovTribe\Models;

use GovTribe\Models\Collection;
use GovTribe\Transformers\AgencyTransformer;
use GovTribe\Transformers\PersonTransformer;

class APIEntity extends \Jenssegers\Mongodb\Model {

	/**
	 * Indicates whether attributes are snake cased on arrays.
	 *
	 * @var bool
	 */
	public static $snakeAttributes = false;

	/**
	 * Get the model's transformer
	 *
	 * @param  array  $models
	 * @return GovTribe\Transformers\Transformer
	 */
	public function getTransformer()
	{
		return \App::make(class_basename($this) . 'Transformer');
	}

	/**
	 * Create a new Eloquent Collection instance.
	 *
	 * @param  array  $models
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function newCollection(array $models = array())
	{
		return new Collection($models);
	}

	protected function getNumberOfAwardsAttribute()
	{
		$pipeline = [
			['$match' => [
				'_id' => new \MongoRegex(
					'/^' . strtolower(class_basename($this)) . '\\|' . $this->_id . '\\|project\\|project\\|wf\\|awarded/'
					)
				]
			],
			['$project' => ['_id' => 0, 'tb' => '$ts.tb']],
			['$unwind' => '$tb'],
			['$unwind' => '$tb'],
			['$match' => ['tb' => new \MongoRegex('/year/')]],
			['$group' => ['_id' => '$tb', 'c' => ['$sum' => 1]]],
			['$sort' => ['_id' => -1]],
		];

		$agg = \DB::connection('graph')->getCollection('edges')->aggregate($pipeline);

		$output = [];

		if (isset($agg['result']))
		{
			foreach ($agg['result'] as $year)
			{
				$output[] = ['calendarYear' => substr($year['_id'], -8, 4), 'numberOfAwards' => $year['c']];
			}
		}

		return $output;
	}

	protected function getAverageAwardValuesAttribute()
	{
		$pipeline = [
			['$match' => [
				'_id' => new \MongoRegex(
					'/^' . strtolower(class_basename($this)) . '\\|' . $this->_id . '\\|project\\|project\\|wf\\|awarded/'
					)
				]
			],
			['$match' => ['ts.av' => ['$exists' => true]]],
			['$project' => ['ts.tb' => 1, 'ts.av' => 1]],
			['$unwind' => '$ts'],
			['$unwind' => '$ts.tb'],
			['$match' => ['ts.tb' => new \MongoRegex('/year/')]],
			['$group' => ['_id' => '$ts.tb', 'avg' => ['$avg' => '$ts.av']]],
			['$sort' => ['_id' => -1]],
		];

		$agg = \DB::connection('graph')->getCollection('edges')->aggregate($pipeline);

		$output = [];

		if (isset($agg['result']))
		{
			foreach ($agg['result'] as $year)
			{
				$output[] = ['calendarYear' => substr($year['_id'], -8, 4), 'averageAwardValue' => round($year['avg'], 2)];
			}
		}

		return $output;
	}

	protected function getActivePeopleAttribute()
	{
		$pipeline = [
			['$match' => [
				'_id' => new \MongoRegex(
					'/^' . strtolower(class_basename($this)) . '\\|' . $this->_id . '\\|person\\|project\\|tb\\|.*year/'
					)
				]
			],
			['$unwind' => '$ts'],
			['$group' => ['_id' => '$_id', 'c' => ['$sum' => 1]]],
			['$sort' => ['_id' => -1]],
		];

		$agg = \DB::connection('graph')->getCollection('edges')->aggregate($pipeline);

		$output = [];

		if (isset($agg['result']))
		{
			foreach ($agg['result'] as $year)
			{
				$output[] = ['calendarYear' => substr($year['_id'], -8, 4), 'numberOfActivePeople' => $year['c']];
			}
		}

		return $output;
	}

	protected function getActiveOfficesAttribute()
	{
		$pipeline = [
			['$match' => [
				'_id' => new \MongoRegex(
					'/^' . strtolower(class_basename($this)) . '\\|' . $this->_id . '\\|office\\|project\\|tb\\|.*year/'
					)
				]
			],
			['$unwind' => '$ts'],
			['$group' => ['_id' => '$_id', 'c' => ['$sum' => 1]]],
			['$sort' => ['_id' => -1]],
		];

		$agg = \DB::connection('graph')->getCollection('edges')->aggregate($pipeline);

		$output = [];

		if (isset($agg['result']))
		{
			foreach ($agg['result'] as $year)
			{
				$output[] = ['calendarYear' => substr($year['_id'], -8, 4), 'numberOfActiveOffices' => $year['c']];
			}
		}

		return $output;
	}

	protected function getTotalProtestsAttribute()
	{
		return;
		$pipeline = [
			['$match' => [
				'_id' => new \MongoRegex(
					'/^' . strtolower(class_basename($this)) . '\\|' . $this->_id . '\\|protest\\|protest\\|tb\\|.*year/'
					)
				]
			],
			['$unwind' => '$ts'],
			['$group' => ['_id' => '$_id', 'c' => ['$sum' => 1]]],
			['$sort' => ['_id' => -1]],
		];

		$agg = \DB::connection('graph')->getCollection('edges')->aggregate($pipeline);

		$output = [];

		if (isset($agg['result']))
		{
			foreach ($agg['result'] as $year)
			{
				$output[] = ['calendarYear' => substr($year['_id'], -8, 4), 'numberOfActiveOffices' => $year['c']];
			}
		}

		return $output;
	}

}
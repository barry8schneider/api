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
			['$project' => ['_id' => 0, 'ts' => 1]],
			['$unwind' => '$ts'],
			['$unwind' => '$ts.tb'],
			['$group' => ['_id' => '$ts.tb', 'c' => ['$sum' => 1]]],
			['$match' => ['_id' => new \MongoRegex('/year/')]],
			['$sort' => ['_id' => -1]],
		];

		$agg = \DB::connection('graph')->getCollection('edges')->aggregate($pipeline);

		$timeBuckets = [];

		if (isset($agg['result']))
		{
			foreach ($agg['result'] as $year)
			{
				$timeBuckets[] = ['calendarYear' => substr($year['_id'], -8, 4), 'numberOfAwards' => $year['c']];
			}
		}

		return $timeBuckets;
	}
}
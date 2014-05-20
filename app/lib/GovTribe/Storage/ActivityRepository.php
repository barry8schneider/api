<?php namespace GovTribe\Storage;

use Illuminate\Cache\Repository as Cache;
use GovTribe\Models\Activity;
use GovTribe\Models\Edge;
use GovTribe\Search\Search;

class ActivityRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Search $search, Activity $entity, Edge $edge, Cache $cache)
	{
		parent::__construct($search, $entity, $edge, $cache);
	}

	/**
	 * Make an activity feed for one or more entities.
	 *
	 * @param  array  $params
	 * @return object
	 */
	public function makeFeed(array $params)
	{
		$count = 0;

		$result = $this->entity->raw(function($collection) use ($params, &$count)
		{
			$query = [
				'type' => ['$in' => ['project', 'protest']],
				'timestamp' => ['$gte' => $params['since']],
				'participants' => ['$in' => $params['participants']],
			];

			$fields = [
				'participants' => 0,
				'timeBuckets' => 0,
				'source' => 0,
			];

			$cursor = $collection->find($query, $fields)
				->sort(['timestamp' => -1])
				->skip($params['skip'])
				->limit($params['take']);

			$count = $cursor->count();

			return $cursor;
		});

		$result->setCount($count);

		return $result;
	}

	/**
	 * Find recently active entities.
	 *
	 * @param  array  $params
	 * @return object
	 */
	public function findRecentlyActive(array $params)
	{
		$index = \Search::getIndex(str_singular($this->entity->getTable()));

		$query = new \Elastica\Query([
			'size' => $params['take'],
			'fields' => $params['columns'],
			'from' => $params['skip'],
			'sort' => ['timestamp' => ['order' => 'desc']],
		]);

		$termFilter = new \Elastica\Filter\Terms('type', $params['privateTypes']);
		$boolNotFilter = new \Elastica\Filter\BoolNot($termFilter);

		$query->setFilter($boolNotFilter);

		return $index->search($query);
	}
}
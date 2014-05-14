<?php namespace GovTribe\Storage;

use GovTribe\Models\Activity;
use GovTribe\Models\Edge;
use GovTribe\Search\Search;

class ActivityRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Search $search, Activity $entity, Edge $edge)
	{
		parent::__construct($search, $entity, $edge);
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
<?php namespace GovTribe\Storage;

use GovTribe\Models\APIEntity;
use GovTribe\Models\Collection;
use GovTribe\Models\Activity;
use GovTribe\Models\Relationship;

class EntityRepository {

	public function all()
	{
		return $this->entity->all();
	}
 
	public function find($id, $columns = array('*'))
	{
		return $this->entity->find($id, $columns);
	}

	public function findOrFail($id, $columns = array('*'))
	{
		return $this->entity->findOrFail($id, $columns);
	}

	public function take($take)
	{
		return $this->entity->take($take);
	}
 
	public function orderBy($order)
	{
		return $this->entity->orderBy($order);
	}

	public function query(array $models = array())
	{
		return $this->entity->query();
	}

	/**
	 * Search for an entity.
	 *
	 * @param  array  $params
	 * @return object
	 */
	public function search(array $params)
	{
		$index = \Search::getIndex(str_singular($this->entity->getTable()));

		$query = new \Elastica\Query([
			'size' => $params['take'],
			'fields' => $params['columns'],
			'from' => $params['skip'],
		]);

		$query->setHighlight(array(
			'fields' => array(
				'name' => array(
					'fragment_size' => 200,
					'number_of_fragments' => 2,
				),
				'synopsis' => array(
					'fragment_size' => 200,
					'number_of_fragments' => 2,
				),
			),
			'pre_tags' => array('<em class="highlight">'),
			'post_tags'  => array('</em>'),
		));

		$qsQuery = new \Elastica\Query\QueryString;
		$qsQuery->setQuery($params['query']);
		$qsQuery->setPhraseSlop(15);
		$qsQuery->setUseDisMax(true);
		$qsQuery->setAnalyzer('standard');

		$fsQuery = new \Elastica\Query\FunctionScore;
		$fsQuery->setScoreMode('avg');
		$fsQuery->addDecayFunction('gauss', 'timestamp', date('Y-m-d'), '30d', '30d', 0.2);
		$fsQuery->setQuery($qsQuery);

		$query->setQuery($fsQuery);

		return $index->search($query);
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

		return $index->search($query);
	}
}
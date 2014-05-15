<?php namespace GovTribe\Storage;

use Illuminate\Cache\Repository as Cache;
use GovTribe\Models\APIEntity;
use GovTribe\Models\Edge;
use GovTribe\Models\Collection;
use GovTribe\Search\Search;
use MongoRegex;

class EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Search $search, APIEntity $entity, Edge $edge, Cache $cache)
	{
		$this->search = $search;
		$this->entity = $entity;
		$this->edge = $edge;
		$this->cache = $cache;
	}

	public function all()
	{
		return $this->entity->remember(10)->all();
	}
 
	public function find($id, $columns = array('*'))
	{
		return $this->entity->remember(10)->find($id, $columns);
	}

	public function take($take)
	{
		return $this->entity->remember(10)->take($take);
	}
 
	public function orderBy($order)
	{
		$this->entity->remember(10)->orderBy($order);
	}

	public function query(array $models = array())
	{
		return $this->entity->query();
	}

	protected function getCacheKey($data)
	{
		return md5(serialize($data + [$this->entity->getTable()]));
	}

	/**
	 * Get a 'slice' of the entity's related entities.
	 *
	 * @param  array  $params
	 * @return array
	 */
	public function slice(array $params)
	{
		return $this->cache->remember($this->getCacheKey(['slice'] + $params), 10, function() use ($params)
		{
			$graph = $this->edge->getConnection()->getMongoDB();
			$parsed = self::sliceToQuery($params['entity'], $params['sliceName']);
			$query = $parsed['query'];
			$relatedEntityModel = '\GovTribe\Models\\' . ucfirst($parsed['relatedEntity']);

			$pipeline = [
				['$match' => $query],
				['$project' => ['ts' => 1, '_id' => 0]],
				['$unwind' => '$ts'],
				['$group' => ['_id' => null, 'count' => ['$sum' => 1]]],
			];

			$agg = $graph->edges->aggregate($pipeline);
			$total = isset($agg['result'][0]['count']) ? $agg['result'][0]['count'] : 0;

			$result = $graph->edges->findOne($query, ['ts' => ['$slice' => [$params['skip'], $params['take']]]]);
			$result = $result['ts'];

			$collection = new Collection;

			foreach ($result as $key => $item)
			{
				$entity = $relatedEntityModel::find($item, ['name', 'mail']);
				if ($entity) $collection->add($entity);
			}

			return ['collection' => $collection, 'total' => $total];
		});
	}

	/**
	 * Search for an entity.
	 *
	 * @param  array  $params
	 * @return object
	 */
	public function search(array $params)
	{
		return $this->cache->remember($this->getCacheKey(['search'] + $params), 10, function() use ($params)
		{
			$index = $this->search->getIndex(str_singular($this->entity->getTable()));

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
		});
	}

	/**
	 * Find recently active entities.
	 *
	 * @param  array  $params
	 * @return object
	 */
	public function findRecentlyActive(array $params)
	{
		return $this->cache->remember($this->getCacheKey(['findRecentlyActive'] + $params), 10, function() use ($params)
		{
			$index = $this->search->getIndex(str_singular($this->entity->getTable()));

			$query = new \Elastica\Query([
				'size' => $params['take'],
				'fields' => $params['columns'],
				'from' => $params['skip'],
				'sort' => ['timestamp' => ['order' => 'desc']],
			]);

			return $index->search($query);
		});
	}

	/**
	 * Parse a slice name / entity combo into a mongo query.
	 *
	 * @param  object  $entity
	 * @param  string  $sliceName
	 * @return array
	 */
	public static function sliceToQuery(APIEntity $entity, $sliceName)
	{
		$sliceArray = explode('_', snake_case($sliceName));
		$relatedEntity = str_singular(array_shift($sliceArray));
		$relatedVia = str_singular(strtolower(array_pop($sliceArray)));

		$result = [
			'relatedEntity' => $relatedEntity,
			'query' => [],
		];

		switch ($sliceName) 
		{
			case 'agenciesThatAwardToThisVendor':
			case 'officesThatAwardToThisVendor':
			case 'peopleThatAwardToThisVendor':
			case 'categoriesThatContainAwardsToThisVendor':
			case 'agenciesThatAwardProjectsInThisCategory':
			case 'officesThatAwardProjectsInThisCategory':
			case 'peopleThatAwardProjectsInThisCategory':
			case 'vendorsThatWinProjectsInThisCategory':

				$result['query'] = [
					'_id' => new MongoRegex(
							'/^'  . str_singular($entity->getTable())
							.'\|' . $entity->_id
							.'\|' . $relatedEntity
							.'\|' . 'project'
							.'\|' . 'wf'
							.'\|' . 'awarded'
							.'/'
						)
				];
				break;
			
			case 'vendorsThatWinTotalSmallBusinessSetAsideProjects':
			case 'vendorsThatWinServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects':
			case 'vendorsThatWinHUBZoneSetAsideProjects':
			case 'vendorsThatWinCompetitive8ASetAsideProjects':
			case 'vendorsThatWinWomanOwnedSmallBusinessSetAsideProjects':
			case 'vendorsThatWinPartialSmallBusinessSetAsideProjects':
			case 'vendorsThatWinEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects':
			case 'vendorsThatWinEmergingSmallBusinessSetAsideProjects':
			case 'vendorsThatWinTotalHBCUMISetAsideProjects':
			case 'vendorsThatWinPartialHBCUMISetAsideProjects':
			case 'officesThatPostTotalSmallBusinessSetAsideProjects':
			case 'officesThatPostServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects':
			case 'officesThatPostHUBZoneSetAsideProjects':
			case 'officesThatPostCompetitive8ASetAsideProjects':
			case 'officesThatPostWomanOwnedSmallBusinessSetAsideProjects':
			case 'officesThatPostPartialSmallBusinessSetAsideProjects':
			case 'officesThatPostEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects':
			case 'officesThatPostEmergingSmallBusinessSetAsideProjects':
			case 'officesThatPostTotalHBCUMISetAsideProjects':
			case 'officesThatPostPartialHBCUMISetAsideProjects':
			case 'peopleThatPostTotalSmallBusinessSetAsideProjects':
			case 'peopleThatPostServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects':
			case 'peopleThatPostHUBZoneSetAsideProjects':
			case 'peopleThatPostCompetitive8ASetAsideProjects':
			case 'peopleThatPostWomanOwnedSmallBusinessSetAsideProjects':
			case 'peopleThatPostPartialSmallBusinessSetAsideProjects':
			case 'peopleThatPostEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects':
			case 'peopleThatPostEmergingSmallBusinessSetAsideProjects':
			case 'peopleThatPostTotalHBCUMISetAsideProjects':
			case 'peopleThatPostPartialHBCUMISetAsideProjects':
			case 'categoriesThatContainTotalSmallBusinessSetAsideProjects':
			case 'categoriesThatContainServiceDisabledVeteranOwnedSmallBusinessSetAsideProjects':
			case 'categoriesThatContainHUBZoneSetAsideProjects':
			case 'categoriesThatContainCompetitive8ASetAsideProjects':
			case 'categoriesThatContainWomanOwnedSmallBusinessSetAsideProjects':
			case 'categoriesThatContainPartialSmallBusinessSetAsideProjects':
			case 'categoriesThatContainEconomicallyDisadvantagedWomanOwnedSmallBusinessSetAsideProjects':
			case 'categoriesThatContainEmergingSmallBusinessSetAsideProjects':
			case 'categoriesThatContainTotalHBCUMISetAsideProjects':
			case 'categoriesThatContainPartialHBCUMISetAsideProjects':

				$stopWords = [
					'that', 'win', 'post',
					'contain', 'award', 'awards',
					'to', 'this', 'set', 'aside'
				];

				$sliceArray = array_filter($sliceArray, function($item) use ($stopWords)
				{
					return !in_array($item, $stopWords);
				});

				$result['query'] = [
					'_id' => new MongoRegex(
							'/^'  . str_singular($entity->getTable())
							.'\|' . $entity->_id
							.'\|' . $relatedEntity
							.'\|' . $relatedVia
							.'\|' . 'sa'
							.'\|' . implode('', $sliceArray)
							.'/'
						)
				];
				break;
		}

		return $result;
	}
}
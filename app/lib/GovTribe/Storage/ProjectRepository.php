<?php namespace GovTribe\Storage;

use Illuminate\Cache\Repository as Cache;
use GovTribe\Models\Project;
use GovTribe\Models\Edge;
use GovTribe\Search\Search;

class ProjectRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Search $search, Project $entity, Edge $edge, Cache $cache)
	{
		parent::__construct($search, $entity, $edge, $cache);
	}

	/**
	 * Search for an entity.
	 *
	 * @param  array  $params
	 * @return object
	 */
	public function search(array $params)
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

		$boolQuery = new \Elastica\Query\Bool;

		if ($params['query'])
		{
			$matchName = new \Elastica\Query\Match;
			$matchName->setFieldQuery('name', $params['query']);
			$matchName->setFieldAnalyzer('name', 'standard');
			$matchName->setFieldOperator('name', 'and');
			$matchName->setFieldBoost('name', 3);
			$matchName->setFieldFuzziness('name', 1);
			$boolQuery->addShould($matchName);

			$matchSynopsis = new \Elastica\Query\Match;
			$matchSynopsis->setFieldQuery('synopsis', $params['query']);
			$matchSynopsis->setFieldAnalyzer('synopsis', 'standard');
			$matchSynopsis->setFieldOperator('synopsis', 'and');
			$boolQuery->addShould($matchSynopsis);
		}
		else
		{
			$matchAll = new \Elastica\Query\MatchAll;
			$boolQuery->addMust(new \Elastica\Query\MatchAll);
		}

		if ($params['filters'])
		{
			foreach ($params['filters'] as $filterName => $filterVal)
			{
				$filterTerm = new \Elastica\Query\Term;
				$filterTerm->setTerm($filterName, $filterVal);
				$boolQuery->addMust($filterTerm);
			}
		}

		$fsQuery = new \Elastica\Query\FunctionScore;
		$fsQuery->setScoreMode('avg');
		$fsQuery->addDecayFunction('gauss', 'timestamp', date('Y-m-d'), '90d', '30d', .4);
		$fsQuery->setQuery($boolQuery);

		$query->setQuery($fsQuery);

		return $index->search($query);
	}
}
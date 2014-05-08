<?php namespace GovTribe\Storage;

use GovTribe\Models\Project;

class ProjectRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Project $entity)
	{
		$this->entity = $entity;
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

		$boolQuery = new \Elastica\Query\Bool;

		$matchName = new \Elastica\Query\Match;
		$matchName->setFieldQuery('name.full', $params['query']);
		$matchName->setFieldAnalyzer('name.full', 'standard');
		$matchName->setFieldOperator('name.full', 'and');
		$matchName->setFieldBoost('name.full', 5);
		$matchName->setFieldFuzziness('name.full', 1);
		$boolQuery->addShould($matchName);

		$matchSynopsis = new \Elastica\Query\Match;
		$matchSynopsis->setFieldQuery('synopsis', $params['query']);
		$matchName->setFieldAnalyzer('synopsis', 'standard');
		$matchSynopsis->setFieldOperator('synopsis', 'and');
		$boolQuery->addShould($matchSynopsis);

		$fsQuery = new \Elastica\Query\FunctionScore;
		$fsQuery->setScoreMode('avg');
		$fsQuery->addDecayFunction('gauss', 'timestamp', date('Y-m-d'), '30d', '30d', 0.2);
		$fsQuery->setQuery($boolQuery);

		$query->setQuery($fsQuery);

		return $index->search($query);
	}
}
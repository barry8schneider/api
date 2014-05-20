<?php namespace GovTribe\Transformers;

use Carbon\Carbon;

class CategoryTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array(
					'name' => $entity->name ? (string) $entity->name: self::NULL_TEXT,
					'type' => 'category',
					'_id' => $entity->_id,
				);

				break;
		}

		$data = $this->convertMongoIdsInArray($data);
		$data = $this->convertMongoDatesInArray($data, 'ISO8601');
		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}

	public function transformForResource($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array(
					'name' => $entity->name ? (string) $entity->name : self::NULL_TEXT,
					'type' => 'category',
					'_id' => $entity->_id,
					'govTribeStats' => new \stdClass,
					'timestamp'  => $entity->timestamp ? $entity->timestamp : self::NULL_TIMESTAMP,

					'parentCategories' => $entity->parents ? (array) $entity->parents : [],
					'childCategories' => $entity->children ? (array) $entity->children : [],

					'procurementStats' => [
						'averageTimesToAward' => $entity->averageTimesToAward ? (array) $entity->averageTimesToAward : [],
						'averageAwardValues' => $entity->averageAwardValues ? (array) $entity->averageAwardValues : [],
						'numbersOfAwards' => $entity->numbersOfAwards ? (array) $entity->numbersOfAwards : [],
						'awardDollarFlow' => $entity->awardDollarFlow ? (array) $entity->awardDollarFlow : [],
					],

					'organizationalStats' => [
						'activePeople' => $entity->activePeople ? (array) $entity->activePeople : [],
						'activeOffices' => $entity->activeOffices ? (array) $entity->activeOffices : [],
						'activeAgencies' => $entity->activeAgencies ? (array) $entity->activeAgencies : [],
					],

					'obligationStats' => [
						'totalObligations' => [],
					],
				);

				break;
		}

		$data = $this->convertMongoIdsInArray($data);
		$data = $this->convertMongoDatesInArray($data, 'ISO8601');
		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}
}
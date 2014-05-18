<?php namespace GovTribe\Transformers;

use Carbon\Carbon;

class PersonTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array(
					'name' => $entity->name ? (string) $entity->name: (string) $entity->mail,
					'type' => 'person',
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
					'type' => 'person',
					'_id' => (string) $entity->_id,
					'govTribeStats' => new \stdClass,
					'timestamp'  => $entity->timestamp ? $entity->timestamp : self::NULL_TIMESTAMP,

					'email' => $entity->mail ? (string) $entity->mail : self::NULL_TEXT,
					'position' => $entity->position ? (string) $entity->position : self::NULL_TEXT,
					'phone' => $entity->phoneNumber ? (string) $entity->phoneNumber : self::NULL_TEXT,
					'agencies' => $entity->agencies ? (array) $entity->agencies : [],
					'offices' => $entity->offices ? (array) $entity->offices : [],

					'obligationStats' => [
						'totalObligations' => [],
					],

					'procurementStats' => [
						'averageTimesToAward' => $entity->averageTimesToAward ? (array) $entity->averageTimesToAward : [],
						'averageAwardValues' => $entity->averageAwardValues ? (array) $entity->averageAwardValues : [],
						'numbersOfAwards' => $entity->numbersOfAwards ? (array) $entity->numbersOfAwards : [],
						'awardDollarFlow' => $entity->awardDollarFlow ? (array) $entity->awardDollarFlow : [],
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
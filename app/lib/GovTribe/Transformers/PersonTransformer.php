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
					'name' => $entity->name ? $entity->name: self::NULL_TEXT,
					'type' => 'person',
					'_id' => (string) $entity->_id,
				);

				break;
		}

		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}

	public function transformForResource($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array(
					'name' => $entity->name ? $entity->name : self::NULL_TEXT,
					'type' => 'person',
					'_id' => (string) $entity->_id,
					'timestamp'  => $entity->timestamp ? Carbon::createFromTimeStamp($entity->timestamp->sec)->toISO8601String() : self::NULL_TIMESTAMP,

					'email' => $entity->mail,
					'position' => $entity->position ? $entity->position : self::NULL_TEXT,
					'phone' => $entity->phoneNumber ? $entity->phoneNumber : self::NULL_TEXT,
					'agencies' => $entity->agencies ? $this->convertMongoIdsInArray($entity->agencies) : self::EMPTY_NTI_ARRAY,
					'offices' => $entity->offices ? $this->convertMongoIdsInArray($entity->offices) : self::EMPTY_NTI_ARRAY,

					'procurementStats' => [
						'averageTimesToAward' => isset($entity->market['characteristics']['averageDaysToAwardPerYear']) ? $entity->market['characteristics']['averageDaysToAwardPerYear'] : self::EMPTY_NTI_ARRAY,
						'averageAwardValues' => isset($entity->market['characteristics']['averageAwardValuePerYear']) ? $entity->market['characteristics']['averageAwardValuePerYear'] : self::EMPTY_NTI_ARRAY,
						'numbersOfAwards' => isset($entity->market['characteristics']['awardsPerYear']) ? $entity->market['characteristics']['awardsPerYear'] : self::EMPTY_NTI_ARRAY,
						'awardDollarFlow' => isset($entity->market['dollarFlow']) ? $entity->market['dollarFlow'] : self::EMPTY_NTI_ARRAY,
					],
				);

				break;
		}

		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}
}
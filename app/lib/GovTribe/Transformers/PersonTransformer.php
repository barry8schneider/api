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
						'averageTimesToAward' => $entity->averageTimesToAward ? $entity->averageTimesToAward : self::EMPTY_NTI_ARRAY,
						'averageAwardValues' => $entity->averageAwardValues ? $entity->averageAwardValues : self::EMPTY_NTI_ARRAY,
						'numbersOfAwards' => $entity->numbersOfAwards ? $entity->numbersOfAwards : self::EMPTY_NTI_ARRAY,
						'awardDollarFlow' => $entity->awardDollarFlow ? $entity->awardDollarFlow : self::EMPTY_NTI_ARRAY,
					],
				);

				break;
		}

		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}
}
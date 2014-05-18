<?php namespace GovTribe\Transformers;

use Carbon\Carbon;

class VendorTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array(
					'name' => $entity->name ? (string) $entity->name: self::NULL_TEXT,
					'type' => 'vendor',
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
					'type' => 'vendor',
					'_id' => $entity->_id,
					'govTribeStats' => new \stdClass,
					'timestamp'  => $entity->timestamp ? $entity->timestamp : self::NULL_TIMESTAMP,
					'websites'  => $entity->sourceLinks ? (array) $entity->sourceLinks : [],

					'NAICSWon' => $entity->NAICSWon ? (array) $entity->NAICSWon : [],
					'setAsideTypesWon' => $entity->setAsideTypesWon ? (array) $entity->setAsideTypesWon : [],
					'classCodesWon' => $entity->classCodesWon ? (array) $entity->classCodesWon : [],

					'procurementStats' => [
						'numbersOfAwards' => $entity->numbersOfAwards ? (array) $entity->numbersOfAwards : [],
						'awardDollarFlow' => $entity->awardDollarFlow ? (array) $entity->awardDollarFlow : [],
					],

					'obligationStats' => [
						'totalObligations' => [],
					],

					'protestStats' => [
						'totalProtests' => $entity->totalProtests ? (array) $entity->totalProtests : [],
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
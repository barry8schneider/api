<?php namespace GovTribe\Transformers;

use Carbon\Carbon;

class OfficeTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array(
					'name' => $entity->name ? (string) $entity->name: self::NULL_TEXT,
					'type' => 'office',
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
					'type' => 'office',
					'_id' => $entity->_id,
					'govTribeStats' => new \stdClass,
					'timestamp'  => $entity->timestamp ? $entity->timestamp : self::NULL_TIMESTAMP,
					'acronyms' => $entity->acronyms ? (array) $entity->acronyms : [],
					'website'  => $entity->sourceLink ? (string) $entity->sourceLink : self::NULL_TEXT,
					'agencies' => $entity->agencies ? (array) $entity->agencies : [],

					'procurementStats' => [
						'averageTimesToAward' => $entity->averageTimesToAward ? (array) $entity->averageTimesToAward : [],
						'averageAwardValues' => $entity->averageAwardValues ? (array) $entity->averageAwardValues : [],
						'numbersOfAwards' => $entity->numbersOfAwards ? (array) $entity->numbersOfAwards : [],
						'awardDollarFlow' => $entity->awardDollarFlow ? (array) $entity->awardDollarFlow : [],
					],

					'organizationalStats' => [
						'activePeople' => $entity->activePeople ? (array) $entity->activePeople : [],
					],

					'obligationStats' => [],

					'protestStats' => [
						'totalProtests' => $entity->totalProtests ? (array) $entity->totalProtests : [],
						'protestsWithdrawn' => $entity->protestsWithdrawn ? (array) $entity->protestsWithdrawn : [],
						'protestsDenied' => $entity->protestsDenied ? (array) $entity->protestsDenied : [],
						'protestsSustained' => $entity->protestsSustained ? (array) $entity->protestsSustained : [],
						'protestsDismissed' => $entity->protestsDismissed ? (array) $entity->protestsDismissed : [],
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
<?php namespace GovTribe\Transformers;

use Carbon\Carbon;

class AgencyTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array(
					'name' => $entity->name ? $entity->name: self::NULL_TEXT,
					'type' => 'agency',
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
					'type' => 'agency',
					'_id' => (string) $entity->_id,
					'timestamp'  => $entity->timestamp ? Carbon::createFromTimeStamp($entity->timestamp->sec)->toISO8601String() : self::NULL_TIMESTAMP,

					'acronyms' => $entity->acronyms ? $entity->acronyms : self::EMPTY_NTI_ARRAY,
					'website'  => $entity->sourceLink ? $entity->sourceLink : self::NULL_TEXT,

					'procurementStats' => [
						'averageTimesToAward' => isset($entity->market['characteristics']['averageDaysToAwardPerYear']) ? $entity->market['characteristics']['averageDaysToAwardPerYear'] : self::EMPTY_NTI_ARRAY,
						'averageAwardValues' => isset($entity->market['characteristics']['averageAwardValuePerYear']) ? $entity->market['characteristics']['averageAwardValuePerYear'] : self::EMPTY_NTI_ARRAY,
						'numbersOfAwards' => isset($entity->market['characteristics']['awardsPerYear']) ? $entity->market['characteristics']['awardsPerYear'] : self::EMPTY_NTI_ARRAY,
						'awardDollarFlow' => isset($entity->market['dollarFlow']) ? $entity->market['dollarFlow'] : self::EMPTY_NTI_ARRAY,
					],

					'organizationalStats' => [
						'activePeople' => isset($entity->market['characteristics']['activePeoplePerYear']) ? $entity->market['characteristics']['activePeoplePerYear'] : self::EMPTY_NTI_ARRAY,
						'activeOffices' => isset($entity->market['characteristics']['activeOfficesPerYear']) ? $entity->market['characteristics']['activeOfficesPerYear'] : self::EMPTY_NTI_ARRAY,
					],

					'protestStats' => [
						'totalProtests' => isset($entity->market['characteristics']['protestsPerYear']) ? $entity->market['characteristics']['protestsPerYear'] : self::EMPTY_NTI_ARRAY,
						'protestsWithdrawn' => isset($entity->market['characteristics']['protestsWithdrawn']) ? $entity->market['characteristics']['protestsWithdrawn'] : self::EMPTY_NTI_ARRAY,
						'protestsDenied' => isset($entity->market['characteristics']['protestsDenied']) ? $entity->market['characteristics']['protestsDenied'] : self::EMPTY_NTI_ARRAY,
						'protestsSustained' => isset($entity->market['characteristics']['protestsSustained']) ? $entity->market['characteristics']['protestsSustained'] : self::EMPTY_NTI_ARRAY,
						'protestsDismissed' => isset($entity->market['characteristics']['protestsDismissed']) ? $entity->market['characteristics']['protestsDismissed'] : self::EMPTY_NTI_ARRAY,
					],

				);

				break;
		}

		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}
}
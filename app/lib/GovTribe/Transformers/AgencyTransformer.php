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
					'name' => $entity->name ? $entity->name : self::NULL_TEXT,
					'type' => 'agency',
					'_id' => (string) $entity->_id,
				);

				break;
		}

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

					'acronyms' => $entity->acronyms ? $entity->acronyms : self::EMPTY_NTI_ARRAY,
					'timestamp'  => $entity->timestamp ? Carbon::createFromTimeStamp($entity->timestamp->sec)->toISO8601String() : self::NULL_TIMESTAMP,
					'website'  => $entity->sourceLink ? $entity->sourceLink : self::NULL_TEXT,
					'procurementStats' => [
						'awardDollarFlow' => isset($entity->market['dollarFlow']) ? $entity->market['dollarFlow'] : self::EMPTY_NTI_ARRAY,
						'numbersOfAwards' => $entity->numberOfAwards,
					],


				);

				break;
		}

		return $this->sortKINO($data);
	}
}
<?php namespace GovTribe\Transformers;

use GovTribe\Models\Vendor;
use GovTribe\Models\APICollection as APICollection;

class VendorTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array(
					'name' => $entity->name ? $entity->name: self::NULL_TEXT,
					'type' => 'vendor',
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
					'type' => 'vendor',
					'_id' => (string) $entity->_id,
					'websites'  => $entity->sourceLinks ? $entity->sourceLinks : self::NULL_TEXT,

					'procurementStats' => [
						'NAICSWon' => isset($entity->market['characteristics']['topNAICSs']) ? array_keys($entity->market['characteristics']['topNAICSs']) : self::EMPTY_NTI_ARRAY,
						'setAsideTypesWon' => isset($entity->market['characteristics']['setAsideType']) ? array_keys($entity->market['characteristics']['setAsideType']) : self::EMPTY_NTI_ARRAY,
						'classCodesWon' => isset($entity->market['characteristics']['topClassCodes']) ? array_keys($entity->market['characteristics']['topClassCodes']) : self::EMPTY_NTI_ARRAY,
						'numbersOfAwards' => isset($entity->market['characteristics']['awardsPerYear']) ? $entity->market['characteristics']['awardsPerYear'] : self::EMPTY_NTI_ARRAY,
						'awardDollarFlow' => isset($entity->market['dollarFlow']) ? $entity->market['dollarFlow'] : self::EMPTY_NTI_ARRAY,
					],

					'protestStats' => [
						'totalProtests' => isset($entity->market['characteristics']['protestsPerYear']) ? $entity->market['characteristics']['protestsPerYear'] : self::EMPTY_NTI_ARRAY,
					],
				);

				break;
		}

		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}
}
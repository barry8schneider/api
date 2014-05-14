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
					'timestamp'  => $entity->timestamp ? Carbon::createFromTimeStamp($entity->timestamp->sec)->toISO8601String() : self::NULL_TIMESTAMP,
					'websites'  => $entity->sourceLinks ? $entity->sourceLinks : self::NULL_TEXT,

					'procurementStats' => [
						'NAICSWon' => $entity->NAICSWon ? $entity->NAICSWon : self::EMPTY_NTI_ARRAY,
						'setAsideTypesWon' => $entity->setAsideTypesWon ? $entity->setAsideTypesWon : self::EMPTY_NTI_ARRAY,
						'classCodesWon' => $entity->classCodesWon ? $entity->classCodesWon : self::EMPTY_NTI_ARRAY,
						'numbersOfAwards' => $entity->numbersOfAwards ? $entity->numbersOfAwards : self::EMPTY_NTI_ARRAY,
						'awardDollarFlow' => $entity->awardDollarFlow ? $entity->awardDollarFlow : self::EMPTY_NTI_ARRAY,
					],

					'protestStats' => [
						'totalProtests' => $entity->totalProtests ? $entity->totalProtests : self::EMPTY_NTI_ARRAY,
					],
				);

				break;
		}

		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}
}
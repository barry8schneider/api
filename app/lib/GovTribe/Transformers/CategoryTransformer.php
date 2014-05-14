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
					'name' => $entity->name ? $entity->name: self::NULL_TEXT,
					'type' => 'category',
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
					'type' => 'category',
					'_id' => (string) $entity->_id,
					'timestamp'  => $entity->timestamp ? Carbon::createFromTimeStamp($entity->timestamp->sec)->toISO8601String() : self::NULL_TIMESTAMP,

					'parentCategories' => $entity->parents ? $entity->parents : self::EMPTY_NTI_ARRAY,
					'childCategories' => $entity->children ? $entity->children : self::EMPTY_NTI_ARRAY,

					'procurementStats' => [
						'averageTimesToAward' => $entity->averageTimesToAward ? $entity->averageTimesToAward : self::EMPTY_NTI_ARRAY,
						'averageAwardValues' => $entity->averageAwardValues ? $entity->averageAwardValues : self::EMPTY_NTI_ARRAY,
						'numbersOfAwards' => $entity->numbersOfAwards ? $entity->numbersOfAwards : self::EMPTY_NTI_ARRAY,
						'awardDollarFlow' => $entity->awardDollarFlow ? $entity->awardDollarFlow : self::EMPTY_NTI_ARRAY,
					],

					'organizationalStats' => [
						'activePeople' => $entity->activePeople ? $entity->activePeople : self::EMPTY_NTI_ARRAY,
						'activeOffices' => $entity->activeOffices ? $entity->activeOffices : self::EMPTY_NTI_ARRAY,
					],

					'protestStats' => [
						'totalProtests' => $entity->totalProtests ? $entity->totalProtests : self::EMPTY_NTI_ARRAY,
						'protestsWithdrawn' => $entity->protestsWithdrawn ? $entity->protestsWithdrawn : self::EMPTY_NTI_ARRAY,
						'protestsDenied' => $entity->protestsDenied ? $entity->protestsDenied : self::EMPTY_NTI_ARRAY,
						'protestsSustained' => $entity->protestsSustained ? $entity->protestsSustained : self::EMPTY_NTI_ARRAY,
						'protestsDismissed' => $entity->protestsDismissed ? $entity->protestsDismissed : self::EMPTY_NTI_ARRAY,
					],
					
				);

				break;
		}

		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}
}
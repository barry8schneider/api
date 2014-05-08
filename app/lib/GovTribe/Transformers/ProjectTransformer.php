<?php namespace GovTribe\Transformers;

use Carbon\Carbon;

class ProjectTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':

				$data = array(
					'name' => $entity->name ? $entity->name : self::NULL_TEXT,
					'type' => 'project',
					'_id' => (string) $entity->_id,
					'timestamp' => $entity->timestamp,
					'highlights' => $entity->getHighlights(),
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
					'type' => 'project',
					'_id' => (string) $entity->_id,
					'timestamp'  => $entity->timestamp ? Carbon::createFromTimeStamp($entity->timestamp->sec)->toISO8601String() : self::NULL_TIMESTAMP,

					'NAICS' => $entity->NAICS ? $entity->NAICS : self::EMPTY_NTI_ARRAY,
					'classCodes' => $entity->classCodes? $entity->classCodes : self::EMPTY_NTI_ARRAY,
					'setAsideType' => $entity->setAsideType ? $entity->setAsideType : self::NULL_TEXT,
					'dueDates' => $this->transformDueDatesByStatus($entity->dueDatesByStatus),
					'workflowStatus' => isset($entity->workflowStatus['workflowStatus']) ? $entity->workflowStatus['workflowStatus'] : self::NULL_TEXT,
					'pointsOfContact' => $entity->people ? $this->convertMongoIdsInArray($entity->people) : self::EMPTY_NTI_ARRAY,
					'goodsOrServices' => $entity->goodsOrServices ? $entity->goodsOrServices : self::NULL_TEXT,
					'placeOfPerformanceGeocoded' => $entity->POPs ? $entity->POPs : self::NULL_TEXT,
					'placeOfPerformanceText' => $entity->placeOfPerformanceText ? $entity->placeOfPerformanceText : self::NULL_TEXT,
					'sourceLinks' => $entity->sourceLinks ? $entity->sourceLinks : self::EMPTY_NTI_ARRAY,
					'awardedVendors' => $entity->vendors ? $this->convertMongoIdsInArray($entity->vendors) : self::EMPTY_NTI_ARRAY,
					'solicitationNumbers' => $entity->solicitationNumbers ? $entity->solicitationNumbers : self::EMPTY_NTI_ARRAY,
					'contractNumbers' => $entity->contractNumbers ? $entity->contractNumbers : self::EMPTY_NTI_ARRAY,
					'files' => $entity->files ? $entity->files : self::EMPTY_NTI_ARRAY,
					'agencies' => $entity->agencies ? $this->convertMongoIdsInArray($entity->agencies) : self::EMPTY_NTI_ARRAY,
					'categories' => $entity->categories ? $this->convertMongoIdsInArray($entity->categories) : self::EMPTY_NTI_ARRAY,
					'offices' => $entity->offices ? $this->convertMongoIdsInArray($entity->offices) : self::EMPTY_NTI_ARRAY,
					'synopsis' => $entity->synopsis ? $entity->synopsis : self::NULL_TEXT,
					'awardValue' => $entity->awardValue ? $entity->awardValue : self::NULL_TEXT,
					'awardValueNumeric' => $entity->awardValueNumeric ? $entity->awardValueNumeric : self::NULL_TEXT,
					'predictedCompetition' => $entity->predictedCompetition ? $this->convertMongoIdsInArray($entity->predictedCompetition) : self::EMPTY_NTI_ARRAY,
				);
		}

		return $this->sortKINO($data);
	}

	public function transformDueDatesByStatus($value)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				if ($value)
				{
					$value = $this->convertMongoDatesInArray($value, 'ISO8601');
				}
				else
				{
					$value = [
						[
							'dueDateType' => 'Presolicitation Response',
							'date' => self::NULL_TEXT,
						],
						[
							'dueDateType' => 'Complete Response',
							'date' => self::NULL_TEXT,
						]
					];
				}
				break;
		}

		return $value;
	}
}
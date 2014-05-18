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
					'name' => $entity->name ? $entity->name: self::NULL_TEXT,
					'type' => 'project',
					'_id' => $entity->_id,
				);

				if ($hl = $entity->getHighlights())
				{
					$data['highlights'] = $hl;
					$data['score'] = rtrim(sprintf('%.'.ini_get('serialize_precision').'f', $entity->getScore()));
				}

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
					'type' => 'project',
					'_id' => $entity->_id,
					'govTribeStats' => new \stdClass,
					'timestamp'  => $entity->timestamp ? $entity->timestamp : self::NULL_TIMESTAMP,
					'sourceLinks' => $entity->sourceLinks ? (array) $entity->sourceLinks : [],
					'NAICS' => $entity->NAICS ? (array) $entity->NAICS : [],
					'classCodes' => $entity->classCodes? (array) $entity->classCodes : [],
					'goodsOrServices' => $entity->goodsOrServices ? (string) $entity->goodsOrServices : self::NULL_TEXT,
					'setAsideType' => $entity->setAsideType ? (string) $entity->setAsideType : self::NULL_TEXT,
					'tags' => $entity->tags ? (array) $entity->tags : [],
					'workflowStatus' => $entity->workflowStatus ? (string) $entity->workflowStatus : self::NULL_TEXT,

					'importantDates' => (array) $entity->importantDates,

					'awardData' => [
						'totalAwardValue' => $entity->awardValueNumeric ? (float) $entity->awardValueNumeric : self::NULL_TEXT,
						'awardedVendors' => $entity->vendors ? (array) $entity->vendors : [],
						'basePeriodAwardData' => [],
						'optionPeriodsAwardData' => [],
					],

					'obligationData' => [
						'obligations' => [],
					],

					'pointsOfContact' => $entity->people ? (array) $entity->people : [],
					'agencies' => $entity->agencies ? (array) $entity->agencies : [],
					'categories' => $entity->categories ? (array) $entity->categories : [],
					'offices' => $entity->offices ? (array) $entity->offices : [],
					'protests' => $entity->protests ? (array) $entity->protests : [],

					'placesOfPerformanceGeocoded' => $entity->POPs ? (array) $entity->POPs : [],
					'placeOfPerformanceText' => $entity->placeOfPerformanceText ? (string) $entity->placeOfPerformanceText : self::NULL_TEXT,
					
					'solicitationNumbers' => $entity->solicitationNumbers ? (array) $entity->solicitationNumbers : [],
					'contractNumbers' => $entity->contractNumbers ? (array) $entity->contractNumbers : [],
					'files' => $entity->files ? (array) $entity->files : [],
					'synopses' => $entity->synopsisCollection ? (array) $entity->synopsisCollection : self::NULL_TEXT,

					'predictedCompetition' => $entity->predictedCompetition ? (array) $entity->predictedCompetition : [],
				);
		}

		$data = $this->convertMongoIdsInArray($data);
		$data = $this->convertMongoDatesInArray($data, 'ISO8601');
		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}
}
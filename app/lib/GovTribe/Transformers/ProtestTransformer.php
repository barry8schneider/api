<?php namespace GovTribe\Transformers;

use Carbon\Carbon;

class ProtestTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array_filter(array(
					'name' => $entity->name ? $entity->name: self::NULL_TEXT,
					'type' => 'protest',
					'_id' => (string) $entity->_id,
				));

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
					'type' => 'protest',
					'_id' => (string) $entity->_id,
					'timestamp'  => $entity->timestamp ? Carbon::createFromTimeStamp($entity->timestamp->sec)->toISO8601String() : self::NULL_TIMESTAMP,

					'status' => $entity->status ? $entity->status : self::NULL_TEXT,
					'decision' => $entity->synopsis ? $entity->synopsis : self::NULL_TEXT,
					'decisionURI' => $entity->sourceLink ? $entity->sourceLink : self::NULL_TEXT,
					'agencies' => $entity->agencies ? $this->convertMongoIdsInArray($entity->agencies) : self::EMPTY_NTI_ARRAY,
					'offices' => $entity->offices ? $this->convertMongoIdsInArray($entity->offices) : self::EMPTY_NTI_ARRAY,
					'people' => $entity->people ? $this->convertMongoIdsInArray($entity->people) : self::EMPTY_NTI_ARRAY,
					'projects' => $entity->projects ? $this->convertMongoIdsInArray($entity->projects) : self::EMPTY_NTI_ARRAY,
					'protesters' => $entity->protesters ? $this->convertMongoIdsInArray($entity->protesters) : self::EMPTY_NTI_ARRAY,
				);

				break;
		}

		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}
}
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
					'name' => $entity->name ? (string) $entity->name: self::NULL_TEXT,
					'type' => 'protest',
					'_id' => $entity->_id,
				));
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
					'type' => 'protest',
					'_id' => $entity->_id,
					'timestamp'  => $entity->timestamp ? $entity->timestamp : self::NULL_TIMESTAMP,

					'status' => $entity->status ? (string) $entity->status : self::NULL_TEXT,
					'decision' => $entity->synopsis ? (string) $entity->synopsis : self::NULL_TEXT,
					'decisionURI' => $entity->sourceLink ? (string) $entity->sourceLink : self::NULL_TEXT,
					'agencies' => $entity->agencies ? (array) $entity->agencies : [],
					'offices' => $entity->offices ? (array) $entity->offices : [],
					'people' => $entity->people ? (array) $entity->people : [],
					'projects' => $entity->projects ? (array) $entity->projects : [],
					'protesters' => $entity->protesters ? (array) $entity->protesters  : [],
				);

				break;
		}

		$data = $this->convertMongoIdsInArray($data);
		$data = $this->convertMongoDatesInArray($data, 'ISO8601');
		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}
}
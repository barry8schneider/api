<?php namespace GovTribe\Transformers;

use Carbon\Carbon;

class ActivityTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array(
					'name' => $entity->name ? (string) $entity->name: self::NULL_TEXT,
					'type' => 'activity',
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
					'type' => 'activity',
					'activityType' => $entity->type ? (string) $entity->type : self::NULL_TEXT,
					'_id' => $entity->_id,
					'timestamp'  => $entity->timestamp ? $entity->timestamp : self::NULL_TIMESTAMP,
					'actors' => $entity->actors ? (array) $entity->actors : [],
					'actions' => $entity->actions ? (array) $entity->actions: [],
					'targets' => $entity->targets ? (array) $entity->targets : [],
				);

				break;
		}

		$data = $this->convertMongoIdsInArray($data);
		$data = $this->convertMongoDatesInArray($data, 'ISO8601');
		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}
}
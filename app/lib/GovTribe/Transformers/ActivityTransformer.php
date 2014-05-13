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
					'name' => 'Activity Message',
					'type' => 'activity',
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
					'type' => 'activity',
					'_id' => (string) $entity->_id,
					'timestamp'  => $entity->timestamp ? Carbon::createFromTimeStamp($entity->timestamp->sec)->toISO8601String() : self::NULL_TIMESTAMP,
					'activityType' => $entity->type ? $entity->type : self::NULL_TEXT,

					'actors' => $entity->actors ? $this->convertMongoIdsInArray($entity->actors) : self::EMPTY_NTI_ARRAY,
					'actions' => $entity->actions ? $this->convertMongoDatesInArray($entity->actions, 'ISO8601'): self::EMPTY_NTI_ARRAY,
					'participants' => $entity->participants ? $this->convertMongoIdsInArray($entity->participants) : self::EMPTY_NTI_ARRAY,
					'targets' => $entity->targets ? $this->convertMongoIdsInArray($entity->targets) : self::EMPTY_NTI_ARRAY,
				);

				break;
		}

		$data = $this->convertHTMLEntitiesInArray($data);

		return $this->sortKINO($data);
	}
}
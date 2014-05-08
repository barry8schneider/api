<?php namespace GovTribe\Transformers;

use Carbon\Carbon;

class PersonTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array(
					'name' => $entity->name ? $entity->name :  $entity->mail,
					'type' => 'person',
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
					'position' => $entity->position ? $entity->position : self::NULL_TEXT,
					'email' => $entity->mail,
					'type' => 'person',
					'_id' => (string) $entity->_id,
					'dollarFlow' => isset($entity->market['dollarFlow']) ? $entity->market['dollarFlow'] : array(),
					'timestamp'  => $entity->timestamp ? Carbon::createFromTimeStamp($entity->timestamp->sec)->toISO8601String() : self::NULL_TIMESTAMP,
				);

				ksort($data);
				break;
		}

		return $this->sortKINO($data);
	}
}
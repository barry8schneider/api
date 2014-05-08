<?php namespace GovTribe\Transformers;

use Carbon\Carbon;

class OfficeTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array(
					'name' => $entity->name ? $entity->name : self::NULL_TEXT,
					'type' => 'office',
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
					'type' => 'office',
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
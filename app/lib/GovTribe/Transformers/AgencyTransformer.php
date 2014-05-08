<?php namespace GovTribe\Transformers;

use Carbon\Carbon;

class AgencyTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array(
					'name' => $entity->name ? $entity->name : self::NULL_TEXT,
					'type' => 'agency',
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
					'type' => 'agency',
					'_id' => (string) $entity->_id,
					'acronym' => $entity->acronym ? $entity->acronym : 'None',
					'dollarFlow' => isset($entity->market['dollarFlow']) ? $entity->market['dollarFlow'] : array(),
					'timestamp'  => $entity->timestamp ? Carbon::createFromTimeStamp($entity->timestamp->sec)->toISO8601String() : self::NULL_TIMESTAMP,
				);

				break;
		}

		return $this->sortKINO($data);
	}
}
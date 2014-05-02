<?php namespace GovTribe\Transformers;

use GovTribe\Models\Person;
use GovTribe\Models\APICollection as APICollection;

class PersonTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array_filter(array(
					'name' => $entity->name ? $entity->name : 'Not Available',
					'type' => 'person',
					'_id' => (string) $entity->_id,
				));

				break;
		}

		return $data;
	}

	public function transformForResource($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array_filter(array(
					'name' => $entity->name ? $entity->name : 'Not Available',
					'position' => $entity->position ? $entity->position : 'Not Available',
					'phoneNumber' => $entity->phoneNumber ? $entity->phoneNumber : 'Not Available',
					'email' => $entity->email,
					'type' => 'person',
					'_id' => (string) $entity->_id,
					'acronym' => $entity->acronym,
					'dollarFlow' => $entity->market['dollarFlow'],
					'timestamp' => $entity->timestamp ? $entity->timestamp->sec: null,
				));

				break;
		}

		return $data;
	}
}
<?php namespace GovTribe\Transformers;

use GovTribe\Models\Project;
use GovTribe\Models\APICollection as APICollection;

class ProjectTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array_filter(array(
					'name' => $entity->name ? $entity->name : 'Not Available',
					'type' => 'project',
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
				));

				break;
		}

		return $data;
	}
}
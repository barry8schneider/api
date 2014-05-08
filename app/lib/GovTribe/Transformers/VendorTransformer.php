<?php namespace GovTribe\Transformers;

use GovTribe\Models\Vendor;
use GovTribe\Models\APICollection as APICollection;

class VendorTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array(
					'name' => $entity->name ? $entity->name : self::NULL_TEXT,
					'type' => 'vendor',
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
					'type' => 'vendor',
					'_id' => (string) $entity->_id,
				);

				break;
		}

		return $this->sortKINO($data);
	}
}
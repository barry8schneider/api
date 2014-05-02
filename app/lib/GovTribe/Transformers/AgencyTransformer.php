<?php namespace GovTribe\Transformers;

use GovTribe\Models\Agency as Agency;
use GovTribe\Models\APICollection as APICollection;
use Carbon\Carbon;

class AgencyTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':
				$data = array_filter(array(
					'name' => $entity->name ? $entity->name : 'Not Available',
					'type' => 'agency',
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
					
					'type' => 'agency',
					
					'_id' => (string) $entity->_id,
					
					'acronym' => $entity->acronym ? $entity->acronym : 'None',
					
					'dollarFlow' => isset($entity->market['dollarFlow']) ? $entity->market['dollarFlow'] : array(),

					'topSetAsideTypes' => $entity->topSetAsideTypes,

					'topVendors' => $entity->topVendors,

					'topCategories' => $entity->topCategories,

					'topPeople' => $entity->topPeople,

					'topOffices' => $entity->topOffices,

					'timestamp'  => $entity->timestamp ? Carbon::createFromTimeStamp($entity->timestamp->sec)->toISO8601String() : 'No Activity',
				));

				ksort($data);
				break;
		}

		return $data;
	}
}
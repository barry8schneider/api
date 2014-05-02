<?php namespace GovTribe\Transformers;

class SearchTransformer extends Transformer
{
	public function transformForIndex($entity)
	{
		switch ($this->requestedAPIVersion) 
		{
			case '30':

				$fields = $entity->getFields();

				if (isset($fields['vendors']) && count($fields['vendors']) > 1)
				{
					dd($fields);
				}
				else
				$data = array_filter(array(
					'name' => $entity->name ? $entity->name : 'Not Available',
					'type' => strtolower($entity->getType()),
					'_id' => (string) $entity->_id,
				));


				break;
		}

		return $data;
	}
}
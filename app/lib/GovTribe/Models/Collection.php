<?php namespace GovTribe\Models;

use Illuminate\Database\Eloquent\Collection as BaseCollection;

class Collection extends BaseCollection
{

	/**
	 * Get the model's transformer
	 *
	 * @param  array  $models
	 * @return GovTribe\Transformers\Transformer
	 */
	public function getTransformer()
	{	
		if (isset($this->items[0]))
		{
			return $this->items[0]->getTransformer();
		}
		else
		{
			return \App::make('AgencyTransformer');
		}
		
	}

}
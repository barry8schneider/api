<?php namespace GovTribe\Models;

use Illuminate\Database\Eloquent\Collection as BaseCollection;

class Collection extends BaseCollection
{

	/**
	 * Override the count of items set for this collection.
	 *
	 * @var int
	 */
	protected $count = 0;

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

	/**
	 * Get the items in the collection as an array of NTIs.
	 *
	 * @return array
	 */
	public function toNTIs()
	{
		$this->transform(function($item)
		{
			$item->type = strtolower(class_basename($item));
			return $item;
		});
		return $this->all();
	}

	/**
	 * Count the number of items in the collection.
	 *
	 * @return int
	 */
	public function count()
	{
		if ($this->count)
		{
			return $this->count;
		}
		else return count($this->items);
	}

	/**
	 * Set an arbitrary total number of items for the collection.
	 *
	 * @return int
	 */
	public function setCount($count)
	{
		$this->count = $count;
	}
}
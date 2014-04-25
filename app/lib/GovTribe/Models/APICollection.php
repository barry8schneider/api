<?php namespace GovTribe\Models;

use Illuminate\Database\Eloquent\Collection as BaseCollection;

class APICollection extends BaseCollection
{
	public function toAPI()
	{
		$items = $this->transform(function($item)
		{
			return $item->toAPI();
		});

		return $items;
	}
}
<?php namespace GovTribe\Transformers\Resource;

use League\Fractal\Resource\Item as BaseItem;

class Item extends BaseItem
{
	public static function make($collection, $callback)
	{
		return new self($collection, $callback);
	}
}
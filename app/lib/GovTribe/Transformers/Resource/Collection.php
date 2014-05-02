<?php namespace GovTribe\Transformers\Resource;

use League\Fractal\Resource\Collection as BaseCollection;

class Collection extends BaseCollection
{
	public static function make($collection, $callback)
	{
		return new self($collection, $callback);
	}
}
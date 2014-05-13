<?php namespace GovTribe\Models;

class Agency extends APIEntity {

	protected $connection = 'databot';
	protected $collection = 'agencies';

	public function getAcronymsAttribute()
	{
		if (isset($this->attributes['acronym']))
		{
			return [$this->attributes['acronym']];
		}
		else
		{
			return [];
		}
	}

}
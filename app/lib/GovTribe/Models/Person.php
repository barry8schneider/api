<?php namespace GovTribe\Models;

class Person extends APIEntity {

	protected $connection = 'databot';
	protected $collection = 'people';

	public function getNameAttribute($name)
	{
		if ($name) return $name;
		if (isset($this->attributes['mail'])) return $this->attributes['mail'];
		return null;
	}
}
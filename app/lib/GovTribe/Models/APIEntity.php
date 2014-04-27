<?php namespace GovTribe\Models;

use Illuminate\Support\Facades\Config;

class APIEntity extends \Jenssegers\Mongodb\Model {

	/**
	 * Indicates whether attributes are snake cased on arrays.
	 *
	 * @var bool
	 */
	public static $snakeAttributes = false;
	
	/**
	 * The accessors to append to the model's array form.
	 *
	 * @var array
	 */
	protected $appends = array('type', 'lastActive');

	/**
	 * Create a new Eloquent Collection instance.
	 *
	 * @param  array  $models
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function newCollection(array $models = array())
	{
		return new APICollection($models);
	}

	/**
	 * Get the value of the model's type key.
	 *
	 * @return string
	 */
	public function getTypeAttribute()
	{
	    return $this->attributes['type'] = strtolower(class_basename($this));
	}

	/**
	 * Get the value of the model's timestamp attribute.
	 *
	 * @return int
	 */
	public function getTimestampAttribute()
	{
	    return $this->attributes['timestamp']->sec;
	}

	/**
	 * Get the model's lastActive attribute.
	 *
	 * @return string
	 */
	public function getLastActiveAttribute()
	{
		if (!isset($this->attributes['timestamp'])) return null;
		return \Carbon\Carbon::createFromTimeStamp($this->attributes['timestamp']->sec)->diffForHumans();
	}

}
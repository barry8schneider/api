<?php namespace GovTribe\Models;

use GovTribe\Models\Collection;
use GovTribe\Transformers\AgencyTransformer;
use GovTribe\Transformers\PersonTransformer;

class APIEntity extends \Jenssegers\Mongodb\Model {

	/**
	 * Indicates whether attributes are snake cased on arrays.
	 *
	 * @var bool
	 */
	public static $snakeAttributes = false;

	/**
	 * Get the model's transformer
	 *
	 * @param  array  $models
	 * @return GovTribe\Transformers\Transformer
	 */
	public function getTransformer()
	{
		return \App::make(class_basename($this) . 'Transformer');
	}

	/**
	 * Create a new Eloquent Collection instance.
	 *
	 * @param  array  $models
	 * @return \Illuminate\Database\Eloquent\Collection
	 */
	public function newCollection(array $models = array())
	{
		return new Collection($models);
	}

	/**
	 * Get the model's top vendors.
	 *
	 * @return array
	 */
	public function getTopVendorsAttribute()
	{
		if (!isset($this->attributes['market']['characteristics']['vendors'])) return [];

		$topVendors = $this->attributes['market']['characteristics']['vendors'];

		return array_map(function($value)
		{
			$value['_id']['_id'] = (string) $value['_id']['_id'];

			return array_merge($value['_id'], array('awardsLast90Days' => $value['count']));
		}, $topVendors);
	}

	/**
	 * Get the model's set aside types.
	 *
	 * @return array
	 */
	public function getTopSetAsideTypesAttribute()
	{
		if (!isset($this->attributes['market']['characteristics']['setAsideType'])) return [];

		$setAsideTypes = $this->attributes['market']['characteristics']['setAsideType'];

		foreach ($setAsideTypes as $key => $value) if ($key === 'None') unset($setAsideTypes[$key]);

		return $setAsideTypes;
	}

	/**
	 * Get the model's top categories attribute.
	 *
	 * @return array
	 */
	public function getTopCategoriesAttribute()
	{
		if (!isset($this->attributes['market']['characteristics']['categories'])) return [];

		$topCategories = $this->attributes['market']['characteristics']['categories'];

		return array_map(function($value)
		{
			$value['_id']['_id'] = (string) $value['_id']['_id'];

			return array_merge($value['_id'], array('awardsLast90Days' => $value['count']));
		}, $topCategories);
	}

	/**
	 * Get the model's top people attribute.
	 *
	 * @return array
	 */
	public function getTopPeopleAttribute()
	{
		if (!isset($this->attributes['market']['characteristics']['people'])) return [];

		$topPeople = $this->attributes['market']['characteristics']['people'];

		return array_map(function($value)
		{
			$value['_id']['_id'] = (string) $value['_id']['_id'];

			return array_merge($value['_id'], array('awardsLast90Days' => $value['count']));
		}, $topPeople);
	}

	/**
	 * Get the model's top offices attribute.
	 *
	 * @return array
	 */
	public function getTopOfficesAttribute()
	{
		if (!isset($this->attributes['market']['characteristics']['offices'])) return [];

		$topOffices = $this->attributes['market']['characteristics']['offices'];

		return array_map(function($value)
		{
			$value['_id']['_id'] = (string) $value['_id']['_id'];

			return array_merge($value['_id'], array('awardsLast90Days' => $value['count']));
		}, $topOffices);
	}

}
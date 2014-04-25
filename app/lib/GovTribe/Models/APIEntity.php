<?php namespace GovTribe\Models;

use Illuminate\Support\Facades\Config;

class APIEntity extends \Jenssegers\Mongodb\Model {

	public static $snakeAttributes = false;
	
	protected $appends = array('type');

	protected $perPage = 50;

	public function newCollection(array $models = array())
	{
		return new APICollection($models);
	}

	/**
	 * Convert the model instance to API.
	 *
	 * @return array
	 */
	public function toAPI()
	{
		$typeSpec = $this->getAPITypeSpec();

		$attributesToSend = $this->buildFromAPITypeSpec($typeSpec);
		ksort($attributesToSend, SORT_NATURAL);

		return $this->makeAPISafeAttributes($attributesToSend);
	}

	/**
	 * Based on the requested version, get the model's API type spec.
	 *
	 * @return array
	 */
	public function getAPITypeSpec()
	{
		$version = Config::get('api.requestedVersion');
		$typeSpecs = Config::get('api.spec.' . $version)['types'];
		$thisTypeSpec = Config::get('api.spec.' . $version . '.types.' . class_basename($this));

		if (isset($thisTypeSpec['extends']))
		{
			$thisTypeSpec['properties'] = array_merge(
				$typeSpecs[$thisTypeSpec['extends']]['properties'], 
				$thisTypeSpec['properties']
			);
		}

		return $thisTypeSpec;
	}

	/**
	 * Build an array of attributes based on an API's entity type spec.
	 *
	 * @param  array $spec
	 * @return array
	 */
	public function buildFromAPITypeSpec(array $spec)
	{
		$built = [];

		foreach ($spec['properties'] as $property => $definition)
		{
			if ($definition['with'])
			{
				$built[$property] = call_user_func_array(array($this, $definition['with']), $definition['args']);
			}
			elseif ($definition['default'])
			{
				$built[$property] = $definition['default'];
			}
			else
			{
				$built[$property] = $this->getAttribute($property);
			}
		}

		return $built;
	}

	/**
	 * Convert attributes to their API-safe versions.
	 *
	 * @param  array $attributes
	 *
	 * @return array
	 */
	public static function makeAPISafeAttributes(array $attributes)
	{
		array_walk_recursive($attributes, function(&$item, $key)
		{
			if ($item instanceof \MongoId)
			{
				$item = (string) $item;
			}
			elseif ($item instanceof \MongoDate)
			{
				$item = $item->sec;
			}
			elseif ($item instanceof \Carbon\Carbon)
			{
				$item = $item->timestamp;
			}
			elseif ($key === 'name' && empty($item))
			{
				$item = "Not Available";
			}
		});

		return $attributes;
	}

	public function getTypeAttribute()
	{
	    return $this->attributes['type'] = strtolower(class_basename($this));
	}

}
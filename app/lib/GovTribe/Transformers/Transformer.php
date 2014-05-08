<?php namespace GovTribe\Transformers;

use League\Fractal\TransformerAbstract;
use Carbon\Carbon;
use MongoDate;
use MongoId;

class Transformer extends TransformerAbstract
{

	protected $mode;
	protected $requestedAPIVersion;
	const EMPTY_NTI_ARRAY = 'None Listed';
	const NULL_TEXT = 'Not Available';
	const NULL_TIMESTAMP = 'No Activity';

	/**
	 * Create a new Transformer instance.
	 *
	 * @return \GovTribe\Transformers\Transformer
	 */
	public function __construct()
	{
		$this->requestedAPIVersion = \Config::get('api.requestedVersion');
	}

	/**
	 * Set the transformer's mode.
	 *
	 * @param  string mode
	 *
	 * @return void
	 */
	public function setMode($mode)
	{
		$this->mode = $mode;
	}

	/**
	 * Get the transformer's mode.
	 *
	 * @param  string mode
	 *
	 * @return void
	 */
	public function getMode($mode)
	{
		return $this->mode;
	}

	/**
	 * Transform the entity into its API form.
	 *
	 * @param  mixed
	 * @param  array
	 *
	 * @return array
	 */
	public function transform($entity)
	{
		if ($this->mode === 'index')
		{
			return $this->transformForIndex($entity);
		}
		elseif ($this->mode === 'resource')
		{
			return $this->transformForResource($entity);
		}
	}

	/**
	 * Convert MongoDates in an array to another format.
	 *
	 * @param  array  $attributes
	 * @param  string $format
	 *
	 * @return array
	 */
	public function convertMongoDatesInArray(array $attributes, $format)
	{
		array_walk_recursive($attributes, function(&$mongoDate) use ($format)
		{
			if ($mongoDate instanceof MongoDate)
			{
				$carbon = Carbon::createFromTimeStamp($mongoDate->sec);
				$mongoDate = $carbon->{'to' . $format .'String'}();
			}
		});

		return $attributes;
	}

	/**
	 * Convert MongoIds in an array to string.
	 *
	 * @param  array  $attributes
	 *
	 * @return array
	 */
	public function convertMongoIdsInArray(array $attributes)
	{
		array_walk_recursive($attributes, function(&$mongoId)
		{
			if ($mongoId instanceof MongoId)
			{
				$mongoId = (string) $mongoId;
			}
		});

		return $attributes;
	}

	/**
	 * Sort arrays by key, case insensitive, natural order.
	 *
	 * @param  array  $attributes
	 *
	 * @return array
	 */
	public function sortKINO(array $array)
	{
		array_multisort(array_keys($array), SORT_NATURAL|SORT_FLAG_CASE, $array);
		
		return $array;
	}
}
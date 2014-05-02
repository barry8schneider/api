<?php namespace GovTribe\Transformers;

use League\Fractal\TransformerAbstract;

class Transformer extends TransformerAbstract
{

	protected $mode;
	protected $requestedAPIVersion;

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
}
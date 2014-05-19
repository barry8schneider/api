<?php namespace GovTribe\Models;

use GovTribe\Models\Collection;

class Key extends \Jenssegers\Mongodb\Model {

	protected $connection = 'databot';
	protected $collection = 'keys';
	protected $fillable = [
		'firstName', 'lastName', 
		'company', 'email', 
		'registrationIp'
	];

	/**
	 * Attribute default values;
	 *
	 * @var array
	 */
	protected $attributes = array(
		'firstName' => null,
		'lastName' => null,
		'company' => null,
		'email' => null,
		'registrationIp' => null,
		'limits' => [
			'perHour' => 240,
			'perDay' => 40,
		],
		'isValid' => true,
	);

	/**
	 * Create a new Key model instance.
	 * Overrides Model->__construct.
	 *
	 * @param  array  $attributes
	 * @return void
	 */
	public function __construct(array $attributes = array())
	{
		// If this is a new API key, generate the key property.
		if (!$this->exists)
		{
			$this->attributes['_id'] = $this->generateAPIKey();
		}

		parent::__construct($attributes);
	}

	/**
	 * Create a new API key (UUID v4)
	 *
	 * @return string
	 */
	public function generateAPIKey()
	{
		$key = sprintf(
			'%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
			// 32 bits for "time_low"
			mt_rand(0, 0xffff), mt_rand(0, 0xffff),
			// 16 bits for "time_mid"
			mt_rand(0, 0xffff),
			// four most significant bits holds version number 4
			mt_rand(0, 0x0fff) | 0x4000,
			// 16 bits, 8 bits for "clk_seq_hi_res",
			// 8 bits for "clk_seq_low",
			// two most significant bits holds zero and one for variant DCE1.1
			mt_rand(0, 0x3fff) | 0x8000,
			// 48 bits for "node"
			mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)
		);

		return $key;
	}
}
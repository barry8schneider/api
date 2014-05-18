<?php namespace GovTribe\Models;

use GovTribe\LaravelKinvey\Database\Eloquent\User as KinveyUser;

class User extends KinveyUser
{
	/**
	 * Don't track timestamps for users
	 *
	 * @var bool
	 */
	public $timestamps = false;

	/**
	 * Indicates whether attributes are snake cased on arrays.
	 *
	 * @var bool
	 */
	public static $snakeAttributes = false;

	/**
	 * Attribute default values;
	 *
	 * @var array
	 */
	protected $attributes = array(
		'email' => null,
		'username' => null,
		'first_name' => null,
		'last_name' => null,
		'joinDate' => null,
		'baseSubscriptionExpirationDate' => null,
		'hordCount' => 0,
		'lastPush' => false,
		'pendingPush' => false,
		'isSubscribed' => true,
		'isRegistered' => true,
		'hording' => array(),
		'activity' => array(),
		'recommended' => array(),
		'purchasedProducts' => array(),
		'platforms' => array('api'),
		'filters' => array(),
	);

	protected $fillable = [
		'first_name', 'last_name', 
		'company', 'username', 
		'email',
	];

	/**
	 * Create a new User model instance.
	 * Overrides Model->__construct.
	 *
	 * @param  array  $attributes
	 * @return void
	 */
	public function __construct(array $attributes = array())
	{
		if (!$this->exists)
		{
			$this->attributes['joinDate'] = time();
		}

		parent::__construct($attributes);
	}
}
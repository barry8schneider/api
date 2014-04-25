<?php namespace GovTribe\Tests;

use \Mockery as Mockery;

class MakeAPISafeAttributesTest extends \TestCase
{
	public function setup()
	{
		parent::setup();
		\Illuminate\Support\Facades\Route::enableFilters();
	}

	public function tearDown()
	{
		Mockery::close();
	}

	public function testMakeAPISafeAttributes()
	{
		$attributes = array(
			'_id' => new \MongoId(),
			'timestamp' => new \MongoDate(),
			'created_at' => \Carbon\Carbon::now(),
		);

		$check = \GovTribe\Models\APIEntity::MakeAPISafeAttributes($attributes);

		$this->assertTrue(is_string($check['_id']));
		$this->assertTrue(is_int($check['timestamp']));
		$this->assertTrue(is_int($check['created_at']));
	}
}
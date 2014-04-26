<?php namespace GovTribe\Tests;

use \Mockery as Mockery;

class MakeAPISafeAttributesTest extends \TestCase
{
	public function setup()
	{
		parent::setup();
	}

	public function tearDown()
	{
		parent::tearDown();
	}

	public function testMakeAPISafeAttributes()
	{
		$attributes = array(
			'_id' => new \MongoId(),
			'timestamp' => new \MongoDate(),
			'created_at' => \Carbon\Carbon::now(),
		);

		$check = \GovTribe\Response\Response::api($attributes)->getData(true);

		$this->assertTrue(is_string($check['_id']));
		$this->assertTrue(is_int($check['timestamp']));
		$this->assertTrue(is_int($check['created_at']));
	}
}
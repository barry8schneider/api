<?php namespace GovTribe\Tests;

use \Mockery as Mockery;

class TestCase extends \TestCase
{
	// public function setup()
	// {
	// 	parent::setup();
	// }

	// public function tearDown()
	// {
	// 	//
	// }


	public function mock($class)
	{
		$mock = Mockery::mock($class);
		$this->app->instance($class, $mock);

		return $mock;
	}
}
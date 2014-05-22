<?php namespace GovTribe\Tests;

use \Mockery as Mockery;

class APIKeyFilterTest extends TestCase
{
	public function tearDown()
	{
		Mockery::close();
	}

	public function test()
	{
		$this->app['router']->enableFilters();

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\AgencyController@index'
		);

		$this->assertResponseStatus(403);
	}
}
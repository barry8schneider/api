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
			'GovTribe\Controllers\AgencyController@index',
			[], [], [],
			['HTTP_X-GT-API-KEY' => 'foo']
		);

		$this->assertResponseStatus(403);
	}
}
<?php namespace GovTribe\Tests;

use \Mockery as Mockery;
use GovTribe\Models\Agency;

class AgencyTest30 extends TestCase
{
	public function __construct()
	{
		$this->mock = Mockery::mock('GovTribe\Controllers\AgencyController');
	}

	public function tearDown()
	{
		Mockery::close();
	}

	public function testSetDefault()
	{
		$this->mock
			->shouldReceive('index', 'getAfterFilters', 'getBeforeFilters', 'callAction')
			->andReturn([]);

		$this->app->instance('GovTribe\Controllers\AgencyController', $this->mock);

		$response = $this->action('GET', 
			'GovTribe\Controllers\AgencyController@index'
		);

		$this->assertResponseStatus(200);

		$this->assertEquals(
			$this->app['config']['api']['requestedVersion'],
			$this->app['config']['api']['defaultVersion'],
		 'Default API version is set when none is provided');
	}
}
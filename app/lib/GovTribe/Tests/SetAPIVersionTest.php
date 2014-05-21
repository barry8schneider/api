<?php namespace GovTribe\Tests;

use \Mockery as Mockery;

class SetAPIVersionTest extends TestCase
{

	public function tearDown()
	{
		Mockery::close();
	}

	public function test()
	{
		$this->app['router']->enableFilters();

		$this->mock('GovTribe\Storage\KeyRepository')
			->shouldReceive('isValid')
			->once()
			->andReturn(true);

		$this->mock('GovTribe\Storage\AgencyRepository')
			->shouldReceive('findRecentlyActive')
			->once()
			->andReturn();

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\AgencyController@index',
			[], [], [],
			['HTTP_X-GT-API-KEY' => 'mykey']
		);

		$this->assertResponseStatus(200);

		$this->assertEquals(
			$this->app['config']['api']['requestedVersion'],
			$this->app['config']['api']['defaultVersion'],
		 'Default API version is set when none is provided');
	}
}
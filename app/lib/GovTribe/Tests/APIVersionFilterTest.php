<?php namespace GovTribe\Tests;

use \Mockery as Mockery;

class APIVersionFilterTest extends \TestCase
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

	public function testAPIVersionFilter()
	{
		// No API version
		$response = $this->action('GET', 'GovTribe\Controllers\AgencyController@show');
		$this->assertResponseStatus(400);
		$this->assertEquals($response->getData(true), 'API version not supported');

		// Unsupported API version
		$response = $this->action('GET', 'GovTribe\Controllers\AgencyController@show', array('version' => 'v23'));
		$this->assertResponseStatus(400);
		$this->assertEquals($response->getData(true), 'API version not supported');

		// Supported API version
		foreach ($this->app['config']['api']['spec'] as $version => $spec)
		{
			$agency = Mockery::mock('GovTribe\Models\Agency');
			$agency->shouldReceive('toAPI')->once()->andReturn('all good');
			$repository = Mockery::mock('GovTribe\Storage\AgencyRepository');
			$repository->shouldReceive('findOrFail')->once()->andReturn($agency);
			$this->app->instance('GovTribe\Storage\AgencyRepository', $repository);

			$response = $this->action('GET', 'GovTribe\Controllers\AgencyController@show', array('version' => $version, 'agency' => '51548150db40a5165c0000b6'));
			$this->assertResponseOk();
			$this->assertEquals($response->getData(true), 'all good');
		}
	}
}
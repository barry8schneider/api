<?php namespace GovTribe\Tests;

use \Mockery as Mockery;

class TestCase extends \TestCase
{
	public function setup()
	{
		parent::setup();

		\Illuminate\Support\Facades\Route::enableFilters();

		$agency = Mockery::mock('GovTribe\Models\Agency');
		$agency->shouldReceive('toAPI')->andReturn(array(
			'name' => 'Mock Agency', 
			'type' => 'agency', 
			'_id' => '51548150db40a5165c0000b6'
		));

		$repository = Mockery::mock('GovTribe\Storage\AgencyRepository');
		$repository->shouldReceive('findOrFail')->andReturn($agency);
		$repository->shouldReceive('getAPITypeSpec')->andReturn(array('properties' => array()));

		$this->app->instance('GovTribe\Storage\AgencyRepository', $repository);
	}

	public function tearDown()
	{
		Mockery::close();
	}

}
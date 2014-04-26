<?php namespace GovTribe\Tests;

use \Mockery as Mockery;

class SetAPIVersionTest extends TestCase
{
	public function setup()
	{
		parent::setup();
	}

	public function tearDown()
	{
		parent::tearDown();
	}

	public function testSetDefault()
	{
		$response = $this->action('GET', 
			'GovTribe\Controllers\AgencyController30@show'
		);

		$this->assertResponseStatus(200);
		$this->assertEquals(
			$this->app['config']['api']['requestedVersion'],
			$this->app['config']['api']['defaultVersion'],
		 'Default API version is set when none is provided');
	}
}
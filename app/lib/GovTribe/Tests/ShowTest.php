<?php namespace GovTribe\Tests;

use \Mockery as Mockery;

class ShowTest extends TestCase
{
	public function setup()
	{
		parent::setup();
	}

	public function tearDown()
	{
		parent::tearDown();
	}

	public function testShowEntity()
	{
		foreach ($this->app['config']['api']['supportedVersions'] as $version)
		{
			$response = $this->action('GET', 
				'GovTribe\Controllers\AgencyController' . $version . '@show',
				array('agency' => '51548150db40a5165c0000b6')
			);

			$this->assertResponseOk();
			$this->assertEquals($response->getData(true), array(
				'name' => 'Mock Agency', 
				'type' => 'agency', 
				'_id' => '51548150db40a5165c0000b6'
			));
		}
	}
}
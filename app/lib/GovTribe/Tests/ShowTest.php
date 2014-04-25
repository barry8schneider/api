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
		// Supported API version
		foreach ($this->app['config']['api']['spec'] as $version => $spec)
		{
			$response = $this->action('GET', 
				'GovTribe\Controllers\AgencyController@show',
				array('agency' => '51548150db40a5165c0000b6'),
				array(),
				array(),
				array('HTTP_X_GT_API_VERSION' => $version)
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
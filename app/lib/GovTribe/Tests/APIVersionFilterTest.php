<?php namespace GovTribe\Tests;

use \Mockery as Mockery;

class APIVersionFilterTest extends TestCase
{
	public function setup()
	{
		parent::setup();
	}

	public function tearDown()
	{
		parent::tearDown();
	}

	public function testAPIVersionFilter()
	{
		$this->assertEquals(
			$this->app['config']['api']['requestedVersion'],
			null,
		 'No API version is set by default');

		$response = $this->action('GET', 
			'GovTribe\Controllers\AgencyController@show',
			array(),
			array(),
			array(),
			array('HTTP_X_GT_API_VERSION' => '3')
		);

		$this->assertResponseStatus(200);
		$this->assertEquals(
			$this->app['config']['api']['requestedVersion'],
			$this->app['config']['api']['defaultVersion'],
		 'Default API version is set when none is provided');

		$response = $this->action('GET', 
			'GovTribe\Controllers\AgencyController@show',
			array(),
			array(),
			array(),
			array('HTTP_X_GT_API_VERSION' => '999')
		);

		$this->assertResponseStatus(400);
		$this->assertEquals($response->getData(true), 'API version not supported', 'Unsupported API version cause an error');

		foreach ($this->app['config']['api']['spec'] as $version => $spec)
		{
			$response = $this->action('GET', 'GovTribe\Controllers\AgencyController@show', array('agency' => '51548150db40a5165c0000b6'));
			$this->assertResponseOk();
		}
	}
}
<?php namespace GovTribe\Tests;

use \Mockery as Mockery;
use GovTribe\Models\Activity;
use GovTribe\Transformers\Transformer;

class ActivityTest extends TestCase
{
	public function tearDown()
	{
		Mockery::close();
	}

	public function testIndex()
	{
		$this->app['router']->enableFilters();

		$this->mock('GovTribe\Storage\KeyRepository')
			->shouldReceive('isValid')
			->once()
			->andReturn(true);

		$hits = [
			'count' => 2,
			'hits' => [
				'total' => 2,
				'hits' => [
						['fields' => ['name' => 'Posted', '_id' => '51f79dd2ca985f9b7c00031c']],
				]
			]
		];
		$resultsSet = new \Elastica\ResultSet(new \Elastica\Response($hits, 200), new \Elastica\Query);

		$this->mock('GovTribe\Storage\ActivityRepository')
			->shouldReceive('findRecentlyActive')
			->once()
			->andReturn($resultsSet);

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\ActivityController@index',
			[], [], [],
			['HTTP_X-GT-API-KEY' => 'mykey']
		);

		$this->assertResponseStatus(200);
		$data = $response->getData(true);

		$this->assertArrayHasKey('results', $data);
		$this->assertInternalType('array', $data['results']);
		$this->assertNotEmpty($data['results']);

		$this->assertInternalType('array', $data['results'][0]);

		$this->assertArrayHasKey('name', $data['results'][0]);
		$this->assertInternalType('string', $data['results'][0]['name']);
		$this->assertEquals($data['results'][0]['name'], 'Posted');

		$this->assertArrayHasKey('_id', $data['results'][0]);
		$this->assertInternalType('string', $data['results'][0]['_id']);
		$this->assertEquals($data['results'][0]['_id'], '51f79dd2ca985f9b7c00031c');

		$this->assertArrayHasKey('type', $data['results'][0]);
		$this->assertInternalType('string', $data['results'][0]['type']);
		$this->assertEquals($data['results'][0]['type'], 'activity');
	}

	public function testShow()
	{
		$this->app['router']->enableFilters();

		$this->mock('GovTribe\Storage\KeyRepository')
			->shouldReceive('isValid')
			->once()
			->andReturn(true);

		Activity::unguard();
		$this->mock('GovTribe\Storage\ActivityRepository')
			->shouldReceive('find')
			->once()
			->andReturn(new Activity(['_id' => new \MongoId()]));

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\ActivityController@show',
			[], [], [],
			['HTTP_X-GT-API-KEY' => 'mykey']
		);

		$this->assertResponseStatus(200);
		
		$data = $response->getData(true);

		$this->assertInternalType('array', $data);
		$this->assertNotEmpty($data);

		$this->assertArrayHasKey('actions', $data);
		$this->assertInternalType('array', $data['actions']);
		$this->assertEmpty($data['actions']);

		$this->assertArrayHasKey('activityType', $data);
		$this->assertInternalType('string', $data['activityType']);
		$this->assertEquals($data['activityType'], Transformer::NULL_TEXT);

		$this->assertArrayHasKey('actors', $data);
		$this->assertInternalType('array', $data['actors']);
		$this->assertEmpty($data['actors']);

		$this->assertArrayHasKey('timestamp', $data);
		$this->assertInternalType('string', $data['timestamp']);
		$this->assertEquals($data['timestamp'], Transformer::NULL_TIMESTAMP);

		$this->assertArrayHasKey('_id', $data);
		$this->assertInternalType('string', $data['_id']);
		$this->assertNotNull($data['_id']);
	}
}
<?php namespace GovTribe\Tests;

use \Mockery as Mockery;
use GovTribe\Models\Protest;
use GovTribe\Transformers\Transformer;

class ProtestTest extends TestCase
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
						['fields' => ['name' => 'Test Protest', '_id' => '51f79dd2ca985f9b7c00031c']],
						['fields' => ['name' => null, '_id' => '51f79dd2ca985f9b7c00031c']],
				]
			]
		];
		$resultsSet = new \Elastica\ResultSet(new \Elastica\Response($hits, 200), new \Elastica\Query);

		$this->mock('GovTribe\Storage\ProtestRepository')
			->shouldReceive('findRecentlyActive')
			->once()
			->andReturn($resultsSet);

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\ProtestController@index',
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
		$this->assertEquals($data['results'][0]['name'], 'Test Protest');

		$this->assertArrayHasKey('_id', $data['results'][0]);
		$this->assertInternalType('string', $data['results'][0]['_id']);
		$this->assertEquals($data['results'][0]['_id'], '51f79dd2ca985f9b7c00031c');

		$this->assertArrayHasKey('type', $data['results'][0]);
		$this->assertInternalType('string', $data['results'][0]['type']);
		$this->assertEquals($data['results'][0]['type'], 'protest');

		$this->assertEquals($data['results'][1]['name'], Transformer::NULL_TEXT);
	}

	public function testShow()
	{
		$this->app['router']->enableFilters();

		$this->mock('GovTribe\Storage\KeyRepository')
			->shouldReceive('isValid')
			->once()
			->andReturn(true);

		Protest::unguard();
		$this->mock('GovTribe\Storage\ProtestRepository')
			->shouldReceive('find')
			->once()
			->andReturn(new Protest(['_id' => new \MongoId()]));

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\ProtestController@show',
			[], [], [],
			['HTTP_X-GT-API-KEY' => 'mykey']
		);

		$this->assertResponseStatus(200);
		
		$data = $response->getData(true);

		$this->assertInternalType('array', $data);
		$this->assertNotEmpty($data);

		$this->assertArrayHasKey('_id', $data);
		$this->assertInternalType('string', $data['_id']);
		$this->assertNotNull($data['_id']);

		$this->assertArrayHasKey('timestamp', $data);
		$this->assertInternalType('string', $data['timestamp']);
		$this->assertEquals($data['timestamp'], Transformer::NULL_TIMESTAMP);

		$this->assertArrayHasKey('type', $data);
		$this->assertInternalType('string', $data['type']);

		$this->assertArrayHasKey('name', $data);
		$this->assertInternalType('string', $data['name']);
		$this->assertEquals($data['name'], Transformer::NULL_TEXT);

		$this->assertArrayHasKey('status', $data);
		$this->assertInternalType('string', $data['status']);
		$this->assertEquals($data['status'], Transformer::NULL_TEXT);

		$this->assertArrayHasKey('decisionURI', $data);
		$this->assertInternalType('string', $data['decisionURI']);
		$this->assertEquals($data['decisionURI'], Transformer::NULL_TEXT);

		$this->assertArrayHasKey('decision', $data);
		$this->assertInternalType('string', $data['decision']);
		$this->assertEquals($data['decision'], Transformer::NULL_TEXT);

		$this->assertArrayHasKey('agencies', $data);
		$this->assertInternalType('array', $data['agencies']);
		$this->assertEmpty($data['agencies']);

		$this->assertArrayHasKey('offices', $data);
		$this->assertInternalType('array', $data['offices']);
		$this->assertEmpty($data['offices']);

		$this->assertArrayHasKey('people', $data);
		$this->assertInternalType('array', $data['people']);
		$this->assertEmpty($data['people']);

		$this->assertArrayHasKey('protesters', $data);
		$this->assertInternalType('array', $data['protesters']);
		$this->assertEmpty($data['protesters']);

	}
}
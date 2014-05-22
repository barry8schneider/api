<?php namespace GovTribe\Tests;

use \Mockery as Mockery;
use GovTribe\Models\Person;
use GovTribe\Transformers\Transformer;

class PersonTest extends TestCase
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
						['fields' => ['name' => 'Test Person', '_id' => '51f79dd2ca985f9b7c00031c']],
						['fields' => ['name' => null, '_id' => '51f79dd2ca985f9b7c00031c']],
				]
			]
		];
		$resultsSet = new \Elastica\ResultSet(new \Elastica\Response($hits, 200), new \Elastica\Query);

		$this->mock('GovTribe\Storage\PersonRepository')
			->shouldReceive('findRecentlyActive')
			->once()
			->andReturn($resultsSet);

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\PersonController@index',
			[], [], [],
			['HTTP_X-GT-API-KEY' => 'mykey']
		);

        //Case 1 - Legit entity
		$this->assertResponseStatus(200);
		$data = $response->getData(true);

        $this->assertArrayHasKey('results', $data);
        $this->assertInternalType('array', $data['results']);
        $this->assertNotEmpty($data['results']);

        $this->assertInternalType('array', $data['results'][0]);

        $this->assertArrayHasKey('name', $data['results'][0]);
        $this->assertInternalType('string', $data['results'][0]['name']);
        $this->assertEquals($data['results'][0]['name'], 'Test Person');

        $this->assertArrayHasKey('_id', $data['results'][0]);
        $this->assertInternalType('string', $data['results'][0]['_id']);
        $this->assertEquals($data['results'][0]['_id'], '51f79dd2ca985f9b7c00031c');

        $this->assertArrayHasKey('type', $data['results'][0]);
        $this->assertInternalType('string', $data['results'][0]['type']);
        $this->assertEquals($data['results'][0]['type'], 'person');

        //Case 2 - null handling
        $this->assertEquals($data['results'][1]['name'], Transformer::NULL_TEXT);

	}

	public function testShow()
	{
		$this->app['router']->enableFilters();

		$this->mock('GovTribe\Storage\KeyRepository')
			->shouldReceive('isValid')
			->once()
			->andReturn(true);

		Person::unguard();
		$this->mock('GovTribe\Storage\PersonRepository')
			->shouldReceive('find')
			->once()
			->andReturn(new Person(['_id' => new \MongoId()]));

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\PersonController@show',
			[], [], [],
			['HTTP_X-GT-API-KEY' => 'mykey']
		);

		$this->assertResponseStatus(200);
		
		$data = $response->getData(true);

		$this->assertInternalType('array', $data);
		$this->assertNotEmpty($data);

        $this->assertArrayHasKey('name', $data);
        $this->assertInternalType('string', $data['name']);
        $this->assertEquals($data['name'], Transformer::NULL_TEXT);

        $this->assertArrayHasKey('timestamp', $data);
        $this->assertInternalType('string', $data['timestamp']);
        $this->assertEquals($data['timestamp'], Transformer::NULL_TIMESTAMP);

        $this->assertArrayHasKey('type', $data);
        $this->assertInternalType('string', $data['type']);
        $this->assertEquals($data['type'], 'person');

        $this->assertArrayHasKey('_id', $data);
        $this->assertInternalType('string', $data['_id']);
        $this->assertNotNull($data['_id']);

        $this->assertArrayHasKey('email', $data);
        $this->assertInternalType('string', $data['email']);
        $this->assertEquals($data['email'], Transformer::NULL_TEXT);

        $this->assertArrayHasKey('phone', $data);
        $this->assertInternalType('string', $data['phone']);
        $this->assertEquals($data['phone'], Transformer::NULL_TEXT);

        $this->assertArrayHasKey('position', $data);
        $this->assertInternalType('string', $data['position']);
        $this->assertEquals($data['position'], Transformer::NULL_TEXT);
        

        //relationships
        $this->assertArrayHasKey('agencies', $data);
        $this->assertInternalType('array', $data['agencies']);
        $this->assertEmpty($data['agencies']);

        $this->assertArrayHasKey('offices', $data);
        $this->assertInternalType('array', $data['offices']);
        $this->assertEmpty($data['offices']);


        // procrurementStats
        $this->assertArrayHasKey('procurementStats', $data);
        $this->assertInternalType('array', $data['procurementStats']);
        $this->assertNotEmpty($data['procurementStats']);

        $this->assertArrayHasKey('averageTimesToAward', $data['procurementStats']);
        $this->assertInternalType('array', $data['procurementStats']['averageTimesToAward']);
        $this->assertEmpty($data['procurementStats']['averageTimesToAward']);

        $this->assertArrayHasKey('averageAwardValues', $data['procurementStats']);
        $this->assertInternalType('array', $data['procurementStats']['averageAwardValues']);
        $this->assertEmpty($data['procurementStats']['averageAwardValues']);

        $this->assertArrayHasKey('numbersOfAwards', $data['procurementStats']);
        $this->assertInternalType('array', $data['procurementStats']['numbersOfAwards']);
        $this->assertEmpty($data['procurementStats']['numbersOfAwards']);

        $this->assertArrayHasKey('awardDollarFlow', $data['procurementStats']);
        $this->assertInternalType('array', $data['procurementStats']['awardDollarFlow']);
        $this->assertEmpty($data['procurementStats']['awardDollarFlow']);


	}
}
<?php namespace GovTribe\Tests;

use \Mockery as Mockery;
use GovTribe\Models\Vendor;
use GovTribe\Transformers\Transformer;

class VendorTest extends TestCase
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
						['fields' => ['name' => 'Test Vendor', '_id' => '51f79dd2ca985f9b7c00031c']],
						['fields' => ['name' => null, '_id' => '51f79dd2ca985f9b7c00031c']],
				]
			]
		];
		$resultsSet = new \Elastica\ResultSet(new \Elastica\Response($hits, 200), new \Elastica\Query);

		$this->mock('GovTribe\Storage\VendorRepository')
			->shouldReceive('findRecentlyActive')
			->once()
			->andReturn($resultsSet);

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\VendorController@index',
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
		$this->assertEquals($data['results'][0]['name'], 'Test Vendor');

		$this->assertArrayHasKey('_id', $data['results'][0]);
		$this->assertInternalType('string', $data['results'][0]['_id']);
		$this->assertEquals($data['results'][0]['_id'], '51f79dd2ca985f9b7c00031c');

		$this->assertArrayHasKey('type', $data['results'][0]);
		$this->assertInternalType('string', $data['results'][0]['type']);
		$this->assertEquals($data['results'][0]['type'], 'vendor');

		$this->assertEquals($data['results'][1]['name'], Transformer::NULL_TEXT);
	}

	public function testShow()
	{
		$this->app['router']->enableFilters();

		$this->mock('GovTribe\Storage\KeyRepository')
			->shouldReceive('isValid')
			->once()
			->andReturn(true);

		Vendor::unguard();
		$this->mock('GovTribe\Storage\VendorRepository')
			->shouldReceive('find')
			->once()
			->andReturn(new Vendor(['_id' => new \MongoId()]));

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\VendorController@show',
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

		$this->assertArrayHasKey('websites', $data);
		$this->assertInternalType('array', $data['websites']);
		$this->assertEmpty($data['websites']);

		$this->assertArrayHasKey('NAICSWon', $data);
		$this->assertInternalType('array', $data['NAICSWon']);
		$this->assertEmpty($data['NAICSWon']);

		$this->assertArrayHasKey('setAsideTypesWon', $data);
		$this->assertInternalType('array', $data['setAsideTypesWon']);
		$this->assertEmpty($data['setAsideTypesWon']);

		$this->assertArrayHasKey('classCodesWon', $data);
		$this->assertInternalType('array', $data['classCodesWon']);
		$this->assertEmpty($data['classCodesWon']);

		// procrurementStats
		$this->assertArrayHasKey('procurementStats', $data);
		$this->assertInternalType('array', $data['procurementStats']);
		$this->assertNotEmpty($data['procurementStats']);

		$this->assertArrayHasKey('numbersOfAwards', $data['procurementStats']);
		$this->assertInternalType('array', $data['procurementStats']['numbersOfAwards']);
		$this->assertEmpty($data['procurementStats']['numbersOfAwards']);

		$this->assertArrayHasKey('awardDollarFlow', $data['procurementStats']);
		$this->assertInternalType('array', $data['procurementStats']['awardDollarFlow']);
		$this->assertEmpty($data['procurementStats']['awardDollarFlow']);

		// obligationStats
		$this->assertArrayHasKey('obligationStats', $data);
		$this->assertInternalType('array', $data['obligationStats']);
		$this->assertEmpty($data['obligationStats']);

		// protestStats
		$this->assertArrayHasKey('protestStats', $data);
		$this->assertInternalType('array', $data['protestStats']);
		$this->assertNotEmpty($data['protestStats']);

		$this->assertArrayHasKey('totalProtests', $data['protestStats']);
		$this->assertInternalType('array', $data['protestStats']['totalProtests']);
		$this->assertEmpty($data['protestStats']['totalProtests']);

		// GovTribe stats
		$this->assertArrayHasKey('govTribeStats', $data);
		$this->assertInternalType('array', $data['govTribeStats']);
		$this->assertEmpty($data['govTribeStats']);
	}
}
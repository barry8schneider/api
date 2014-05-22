<?php namespace GovTribe\Tests;

use \Mockery as Mockery;
use GovTribe\Models\Agency;
use GovTribe\Transformers\Transformer;

class AgencyTest extends TestCase
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
						['fields' => ['name' => 'Test Agency', '_id' => '51f79dd2ca985f9b7c00031c']],
						['fields' => ['name' => null, '_id' => '51f79dd2ca985f9b7c00031c']],
				]
			]
		];
		$resultsSet = new \Elastica\ResultSet(new \Elastica\Response($hits, 200), new \Elastica\Query);

		$this->mock('GovTribe\Storage\AgencyRepository')
			->shouldReceive('findRecentlyActive')
			->once()
			->andReturn($resultsSet);

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\AgencyController@index',
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
		$this->assertEquals($data['results'][0]['name'], 'Test Agency');

		$this->assertArrayHasKey('_id', $data['results'][0]);
		$this->assertInternalType('string', $data['results'][0]['_id']);
		$this->assertEquals($data['results'][0]['_id'], '51f79dd2ca985f9b7c00031c');

		$this->assertArrayHasKey('type', $data['results'][0]);
		$this->assertInternalType('string', $data['results'][0]['type']);
		$this->assertEquals($data['results'][0]['type'], 'agency');

		$this->assertEquals($data['results'][1]['name'], Transformer::NULL_TEXT);

		// pagination
		$this->assertArrayHasKey('pagination', $data);
		$this->assertInternalType('array', $data['pagination']);
		$this->assertNotEmpty($data['pagination']);

		$this->assertArrayHasKey('count', $data['pagination']);
		$this->assertInternalType('int', $data['pagination']['count']);
		$this->assertEquals(2, $data['pagination']['count']);

		$this->assertArrayHasKey('total', $data['pagination']);
		$this->assertInternalType('int', $data['pagination']['total']);
		$this->assertEquals(2, $data['pagination']['total']);

		$this->assertArrayHasKey('perPage', $data['pagination']);
		$this->assertInternalType('int', $data['pagination']['perPage']);

		$this->assertArrayHasKey('currentPage', $data['pagination']);
		$this->assertInternalType('int', $data['pagination']['currentPage']);
		$this->assertEquals(1, $data['pagination']['currentPage']);

		$this->assertArrayHasKey('totalPages', $data['pagination']);
		$this->assertInternalType('int', $data['pagination']['totalPages']);
		$this->assertEquals(1, $data['pagination']['totalPages']);

		$this->assertArrayHasKey('links', $data['pagination']);
		$this->assertInternalType('array', $data['pagination']['links']);
		$this->assertEmpty($data['pagination']['links']);
	}

	public function testShow()
	{
		$this->app['router']->enableFilters();

		$this->mock('GovTribe\Storage\KeyRepository')
			->shouldReceive('isValid')
			->once()
			->andReturn(true);

		Agency::unguard();
		$this->mock('GovTribe\Storage\AgencyRepository')
			->shouldReceive('find')
			->once()
			->andReturn(new Agency(['_id' => new \MongoId()]));

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\AgencyController@show',
			[], [], [],
			['HTTP_X-GT-API-KEY' => 'mykey']
		);

		$this->assertResponseStatus(200);
		
		$data = $response->getData(true);

		$this->assertInternalType('array', $data);
		$this->assertNotEmpty($data);

		$this->assertArrayHasKey('acronyms', $data);
		$this->assertInternalType('array', $data['acronyms']);
		$this->assertEmpty($data['acronyms']);

		$this->assertArrayHasKey('name', $data);
		$this->assertInternalType('string', $data['name']);
		$this->assertEquals($data['name'], Transformer::NULL_TEXT);

		$this->assertArrayHasKey('timestamp', $data);
		$this->assertInternalType('string', $data['timestamp']);
		$this->assertEquals($data['timestamp'], Transformer::NULL_TIMESTAMP);

		$this->assertArrayHasKey('type', $data);
		$this->assertInternalType('string', $data['type']);
		$this->assertEquals($data['type'], 'agency');

		$this->assertArrayHasKey('website', $data);
		$this->assertInternalType('string', $data['website']);
		$this->assertEquals($data['website'], Transformer::NULL_TEXT);

		$this->assertArrayHasKey('_id', $data);
		$this->assertInternalType('string', $data['_id']);
		$this->assertNotNull($data['_id']);

		// obligationStats
		$this->assertArrayHasKey('obligationStats', $data);
		$this->assertInternalType('array', $data['obligationStats']);
		$this->assertEmpty($data['obligationStats']);

		// organizationalStats
		$this->assertArrayHasKey('organizationalStats', $data);
		$this->assertInternalType('array', $data['organizationalStats']);
		$this->assertNotEmpty($data['organizationalStats']);

		$this->assertArrayHasKey('activePeople', $data['organizationalStats']);
		$this->assertInternalType('array', $data['organizationalStats']['activePeople']);
		$this->assertEmpty($data['organizationalStats']['activePeople']);

		$this->assertArrayHasKey('activeOffices', $data['organizationalStats']);
		$this->assertInternalType('array', $data['organizationalStats']['activeOffices']);
		$this->assertEmpty($data['organizationalStats']['activeOffices']);

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

		// GovTribe stats
		$this->assertArrayHasKey('govTribeStats', $data);
		$this->assertInternalType('array', $data['govTribeStats']);
		$this->assertEmpty($data['govTribeStats']);

		// protestStats
		$this->assertArrayHasKey('protestStats', $data);
		$this->assertInternalType('array', $data['protestStats']);
		$this->assertNotEmpty($data['protestStats']);

		$this->assertArrayHasKey('totalProtests', $data['protestStats']);
		$this->assertInternalType('array', $data['protestStats']['totalProtests']);
		$this->assertEmpty($data['protestStats']['totalProtests']);

		$this->assertArrayHasKey('protestsWithdrawn', $data['protestStats']);
		$this->assertInternalType('array', $data['protestStats']['protestsWithdrawn']);
		$this->assertEmpty($data['protestStats']['protestsWithdrawn']);

		$this->assertArrayHasKey('protestsDenied', $data['protestStats']);
		$this->assertInternalType('array', $data['protestStats']['protestsDenied']);
		$this->assertEmpty($data['protestStats']['protestsDenied']);

		$this->assertArrayHasKey('protestsSustained', $data['protestStats']);
		$this->assertInternalType('array', $data['protestStats']['protestsSustained']);
		$this->assertEmpty($data['protestStats']['protestsSustained']);

		$this->assertArrayHasKey('protestsDismissed', $data['protestStats']);
		$this->assertInternalType('array', $data['protestStats']['protestsDismissed']);
		$this->assertEmpty($data['protestStats']['protestsDismissed']);
	}
}
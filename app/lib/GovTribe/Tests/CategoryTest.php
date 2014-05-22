<?php namespace GovTribe\Tests;

use \Mockery as Mockery;
use GovTribe\Models\Category;
use GovTribe\Transformers\Transformer;

class CategoryTest extends TestCase
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
						['fields' => ['name' => 'Test Category', '_id' => '51f79dd2ca985f9b7c00031c']],
						['fields' => ['name' => null, '_id' => '51f79dd2ca985f9b7c00031c']],
				]
			]
		];
		$resultsSet = new \Elastica\ResultSet(new \Elastica\Response($hits, 200), new \Elastica\Query);

		$this->mock('GovTribe\Storage\CategoryRepository')
			->shouldReceive('findRecentlyActive')
			->once()
			->andReturn($resultsSet);

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\CategoryController@index',
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
		$this->assertEquals($data['results'][0]['name'], 'Test Category');

		$this->assertArrayHasKey('_id', $data['results'][0]);
		$this->assertInternalType('string', $data['results'][0]['_id']);
		$this->assertEquals($data['results'][0]['_id'], '51f79dd2ca985f9b7c00031c');

		$this->assertArrayHasKey('type', $data['results'][0]);
		$this->assertInternalType('string', $data['results'][0]['type']);
		$this->assertEquals($data['results'][0]['type'], 'category');

		$this->assertEquals($data['results'][1]['name'], Transformer::NULL_TEXT);
	}

	public function testShow()
	{
		$this->app['router']->enableFilters();

		$this->mock('GovTribe\Storage\KeyRepository')
			->shouldReceive('isValid')
			->once()
			->andReturn(true);

		Category::unguard();
		$this->mock('GovTribe\Storage\CategoryRepository')
			->shouldReceive('find')
			->once()
			->andReturn(new Category(['_id' => new \MongoId()]));

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\CategoryController@show',
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

		$this->assertArrayHasKey('description', $data);
		$this->assertInternalType('string', $data['description']);
		$this->assertNotNull($data['description']);

		$this->assertArrayHasKey('mappedNAICS', $data);
		$this->assertInternalType('array', $data['mappedNAICS']);
		$this->assertEmpty($data['mappedNAICS']);

		$this->assertArrayHasKey('mappedClassCodes', $data);
		$this->assertInternalType('array', $data['mappedClassCodes']);
		$this->assertEmpty($data['mappedClassCodes']);

		$this->assertArrayHasKey('parentCategories', $data);
		$this->assertInternalType('array', $data['parentCategories']);
		$this->assertEmpty($data['parentCategories']);

		$this->assertArrayHasKey('childCategories', $data);
		$this->assertInternalType('array', $data['childCategories']);
		$this->assertEmpty($data['childCategories']);

		$this->assertArrayHasKey('childCategories', $data);
		$this->assertInternalType('array', $data['childCategories']);
		$this->assertEmpty($data['childCategories']);

		$this->assertArrayHasKey('name', $data);
		$this->assertInternalType('string', $data['name']);
		$this->assertEquals($data['name'], Transformer::NULL_TEXT);

		$this->assertArrayHasKey('timestamp', $data);
		$this->assertInternalType('string', $data['timestamp']);
		$this->assertEquals($data['timestamp'], Transformer::NULL_TIMESTAMP);

		$this->assertArrayHasKey('type', $data);
		$this->assertInternalType('string', $data['type']);

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

		// obligationStats
		$this->assertArrayHasKey('obligationStats', $data);
		$this->assertInternalType('array', $data['obligationStats']);
		$this->assertEmpty($data['obligationStats']);

		// GovTribe stats
		$this->assertArrayHasKey('govTribeStats', $data);
		$this->assertInternalType('array', $data['govTribeStats']);
		$this->assertEmpty($data['govTribeStats']);
	}
}
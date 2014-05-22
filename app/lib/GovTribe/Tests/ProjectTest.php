<?php namespace GovTribe\Tests;

use \Mockery as Mockery;
use GovTribe\Models\Project;
use GovTribe\Transformers\Transformer;

class ProjectTest extends TestCase
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
						['fields' => ['name' => 'Test Project', '_id' => '51f79dd2ca985f9b7c00031c']],
						['fields' => ['name' => null, '_id' => '51f79dd2ca985f9b7c00031c']],
				]
			]
		];
		$resultsSet = new \Elastica\ResultSet(new \Elastica\Response($hits, 200), new \Elastica\Query);

		$this->mock('GovTribe\Storage\ProjectRepository')
			->shouldReceive('findRecentlyActive')
			->once()
			->andReturn($resultsSet);

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\ProjectController@index',
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
        $this->assertEquals($data['results'][0]['name'], 'Test Project');

        $this->assertArrayHasKey('_id', $data['results'][0]);
        $this->assertInternalType('string', $data['results'][0]['_id']);
        $this->assertEquals($data['results'][0]['_id'], '51f79dd2ca985f9b7c00031c');

        $this->assertArrayHasKey('type', $data['results'][0]);
        $this->assertInternalType('string', $data['results'][0]['type']);
        $this->assertEquals($data['results'][0]['type'], 'project');

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

		Project::unguard();
		$this->mock('GovTribe\Storage\ProjectRepository')
			->shouldReceive('find')
			->once()
			->andReturn(new Project(['_id' => new \MongoId()]));

		$response = $this->action(
			'GET', 
			'GovTribe\Controllers\ProjectController@show',
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
        $this->assertEquals($data['type'], 'project');

        $this->assertArrayHasKey('_id', $data);
        $this->assertInternalType('string', $data['_id']);
        $this->assertNotNull($data['_id']);

        $this->assertArrayHasKey('NAICS', $data);
        $this->assertInternalType('array', $data['NAICS']);
        $this->assertEmpty($data['NAICS']);

        $this->assertArrayHasKey('setAsideType', $data);
        $this->assertInternalType('string', $data['setAsideType']);
        $this->assertEquals($data['setAsideType'], Transformer::NULL_TEXT);

        $this->assertArrayHasKey('importantDates', $data);
        $this->assertInternalType('array', $data['importantDates']);
        $this->assertEmpty($data['importantDates']);

        $this->assertArrayHasKey('workflowStatus', $data);
        $this->assertInternalType('string', $data['workflowStatus']);
        $this->assertEquals($data['workflowStatus'], Transformer::NULL_TEXT);

        $this->assertArrayHasKey('goodsOrServices', $data);
        $this->assertInternalType('string', $data['goodsOrServices']);
        $this->assertEquals($data['goodsOrServices'], Transformer::NULL_TEXT);

        $this->assertArrayHasKey('placeOfPerformanceText', $data);
        $this->assertInternalType('string', $data['placeOfPerformanceText']);
        $this->assertEquals($data['placeOfPerformanceText'], Transformer::NULL_TEXT);

        $this->assertArrayHasKey('placesOfPerformanceGeocoded', $data);
        $this->assertInternalType('array', $data['placesOfPerformanceGeocoded']);
        $this->assertEmpty($data['placesOfPerformanceGeocoded']);

        $this->assertArrayHasKey('sourceLinks', $data);
        $this->assertInternalType('array', $data['sourceLinks']);
        $this->assertEmpty($data['sourceLinks']);

        $this->assertArrayHasKey('solicitationNumbers', $data);
        $this->assertInternalType('array', $data['solicitationNumbers']);
        $this->assertEmpty($data['solicitationNumbers']);

        $this->assertArrayHasKey('files', $data);
        $this->assertInternalType('array', $data['files']);
        $this->assertEmpty($data['files']);

        $this->assertArrayHasKey('classCodes', $data);
        $this->assertInternalType('array', $data['classCodes']);
        $this->assertEmpty($data['classCodes']);

        $this->assertArrayHasKey('tags', $data);
        $this->assertInternalType('array',  $data['tags']);
        $this->assertEmpty($data['tags']);

        $this->assertArrayHasKey('contractNumbers', $data);
        $this->assertInternalType('array', $data['contractNumbers']);
        $this->assertEmpty($data['contractNumbers']);

        $this->assertArrayHasKey('synopsis', $data);
        $this->assertInternalType('string', $data['synopsis']);
        $this->assertEquals($data['synopsis'], Transformer::NULL_TEXT);


        //obligationData
        $this->assertArrayHasKey('obligtationData', $data);
        $this->assertInternalType('array', $data);
        $this->assertEmpty($data['obligtationData']);


        //awardData
        $this->assertArrayHasKey('awardData', $data);
        $this->assertInternalType('array', $data['awardData']);
        $this->assertNotEmpty($data['awardData']);

        $this->assertArrayHasKey('totalAwardValue', $data['awardData']);
        $this->assertInternalType('string', $data['awardData']['totalAwardValue']);
        $this->assertEquals($data['awardData']['totalAwardValue'], Transformer::NULL_TEXT);

        $this->assertArrayHasKey('awardedVendors', $data['awardData']);
        $this->assertInternalType('array', $data['awardData']['awardedVendors']);
        $this->assertEmpty($data['awardData']['awardedVendors']);


        //relationships
        $this->assertArrayHasKey('agencies', $data);
        $this->assertInternalType('array', $data['agencies']);
        $this->assertEmpty($data['agencies']);

        $this->assertArrayHasKey('offices', $data);
        $this->assertInternalType('array', $data['offices']);
        $this->assertEmpty($data['offices']);

        $this->assertArrayHasKey('pointsOfContact', $data);
        $this->assertInternalType('array', $data['pointsOfContact']);
        $this->assertEmpty($data['pointsOfContact']);

        $this->assertArrayHasKey('awardedVendors', $data);
        $this->assertInternalType('array', $data['awardedVendors']);
        $this->assertEmpty($data['awardedVendors']);

        $this->assertArrayHasKey('categories', $data);
        $this->assertInternalType('array', $data['categories']);
        $this->assertEmpty($data['categories']);

        $this->assertArrayHasKey('predictedCompetition', $data);
        $this->assertInternalType('array', $data['predictedCompetition']);
        $this->assertEmpty($data['predictedCompetition']);



	}
}
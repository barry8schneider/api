<?php namespace GovTribe\Controllers;

use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Pagination\Paginator;
use GovTribe\Response\Response;
use GovTribe\Transformers\Manager as Manager;
use GovTribe\Transformers\Transformer as Transformer;
use GovTribe\Transformers\Resource\Item as Item;
use GovTribe\Transformers\Resource\Collection as Collection;
use GovTribe\Storage\EntityRepository as EntityRepository;

class APIController extends BaseController {

	/**
	 * Entity repository.
	 *
	 * @var GovTribe\Storage\EntityRepository
	 */
	protected $entity;

	/**
	 * Fractal manager.
	 *
	 * @var GovTribe\Transformers\Manager
	 */
	protected $fractal;

	/**
	 * Transformer.
	 *
	 * @var GovTribe\Transformers\Transformer
	 */
	protected $transformer;

	/**
	 * Response status code.
	 *
	 * @var int
	 */
	protected $statusCode = 200;

	/**
	 * Results per page.
	 *
	 * @var int
	 */
	protected $perPage = 50;

	/**
	 * Results to skip.
	 *
	 * @var int
	 */
	protected $skip = 0;

	/**
	 * Create a new instance of the controller.
	 *
	 * @return self
	*/
	public function __construct($entity, Manager $fractal, Transformer $transformer)
	{
		if (\Input::get('page', 0) > 1)
		{
			$this->skip = (\Input::get('page') - 1 ) * $this->perPage;
		}

		$this->search = \App::make('search');
		$this->entity = $entity;
		$this->fractal = $fractal;
		$this->transformer = $transformer;

		\DB::connection()->disableQueryLog();
	}

	/**
	 * Get the response status code.
	 *
	 * @return int
	 */
	public function getStatusCode()
	{
		return $this->statusCode;
	}

	/**
	 * Set the response status code.
	 *
	 * @param  int    $statusCode
	 * @return void
	 */
	public function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;
	}

	/**
	 * Item API response.
	 *
	 * @param  mixed    $item
	 * @param  mixed    $transformer
	 * @return Response
	 */
	protected function respondWithItem($item, $transformer)
	{
		$transformer->setMode('resource');
		$resource = Item::make($item, $transformer);
		$rootScope = $this->fractal->createData($resource);
		return $this->respondWithArray($rootScope->toArray()); 
	}

	/**
	 * Collection API response.
	 *
	 * @param  mixed    $collection
	 * @param  mixed    $transformer
	 * @return Response
	 */
	protected function respondWithCollection($collection, $transformer) 
	{
		$transformer->setMode('index');
		$resource = Collection::make($collection, $transformer);
		$rootScope = $this->fractal->createData($resource);
		return $this->respondWithArray($rootScope->toArray()); 
	}

	/**
	 * Paginated collection API response.
	 *
	 * @param  mixed    $collection
	 * @param  mixed    $transformer
	 * @return Response
	 */
	protected function respondWithPaginator(Paginator $paginator, $transformer) 
	{
		$transformer->setMode('index');
		$collection = $paginator->getCollection();

		$resource = Collection::make($collection, $transformer);
		$resource->setPaginator(new IlluminatePaginatorAdapter($paginator));

		$data = $this->fractal->createData($resource)->toArray();

		$response = array();
		$response['results'] = $data['data'];
		$response['pagination'] = array(
			'total' => $data['pagination']['total'],
			'count' => $data['pagination']['count'],
			'perPage' => $data['pagination']['per_page'],
			'currentPage' => $data['pagination']['current_page'],
			'totalPages' => $data['pagination']['total_pages'],
			'links' => $data['pagination']['links'],
		);

		return $this->respondWithArray($response); 
	}

	/**
	 * Array API response.
	 *
	 * @param  array    $array
	 * @param  headers  $headers
	 * @return Response
	 */
	protected function respondWithArray(array $array, array $headers = array()) 
	{
		return Response::api($array, $this->getStatusCode(), $headers);
	}

	/**
	 * Get the resource's related agencies.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function getAgency($id)
	{
		$related = $this->entity->findRelatedEntities($id, array('project'), 'actors', 'agency');

		$paginator = \Paginator::make($related['collection']->all(), $related['total'], $this->perPage);

		return $this->respondWithPaginator($paginator, $related['collection']->getTransformer());
	}

	/**
	 * Get the resource's related protests.
	 *
	 * @param  string  $type
	 * @param  string  $id
	 * @return Response
	 */
	public function getProtest($id)
	{
		$related = $this->entity->findRelatedEntities($id, array('protest'), 'targets', 'protest');

		$paginator = \Paginator::make($related['collection']->all(), $related['total'], $this->perPage);

		return $this->respondWithPaginator($paginator, $related['collection']->getTransformer());
	}


	/**
	 * Get other entities related to this one.
	 *
	 * @param  string  $rootID      ID of entity to find related entities for (51548150db40a5165c0000b8)
	 * @param  string  $rootType    Type of entity to find related entities for (agency, office)
	 * @param  string  $relatedType Type of related entity to find (office, projects)
	 * @return Elastica\ResultSet
	 */
	public function findRelatedEntites($rootID, $rootType, $relatedType)
	{
		$rootCollectionName = str_plural($this->entityType);
		$relatedCollectionName = str_plural($relatedType);
		$relatedElasticType = str_singular(ucfirst($relatedType));
		$baseQuery = new \Elastica\Query([
			'size' => $this->perPage,
			'fields' => ['name', '_type', '_id'],
			'sort' => ['timestamp' => ['order' => 'desc']],
			'from' => $this->skip,
		]);

		$boolAndFilter = new \Elastica\Filter\BoolAnd;

		// Only match documents that embed the rootID and rootType as an NTI
		$termFilter = new \Elastica\Filter\Term;
		$termFilter->setTerm($rootCollectionName . '._id', $rootID);

		$nestedFilter = new \Elastica\Filter\Nested;
		$nestedFilter->setPath($rootCollectionName);
		$nestedFilter->setFilter($termFilter);
		$boolAndFilter->addFilter($nestedFilter);

		// Filter to the type of entity we want to find
		$boolAndFilter->addFilter(new \Elastica\Filter\Type($relatedElasticType));
		$baseQuery->setFilter($boolAndFilter);

		return $this->search->getIndex('entity-name')->search($baseQuery);
	}

	/**
	 * Get the resource's related offices.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function getOffice($id)
	{
		$response = $this->findRelatedEntites($id, $this->entityType, 'office');

		$paginator = \Paginator::make($response->getResults(), $response->getTotalHits(), $this->perPage);

		return $this->respondWithPaginator($paginator, \App::make('SearchTransformer'));
	}

	/**
	 * Get the resource's related vendors.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function getVendor($id)
	{
		$result = $this->entity->findRelatedEntities($id, 'vendor');

		$paginator = \Paginator::make($result['collection']->all(), $result['total'], $this->perPage);


		return $this->respondWithPaginator($paginator, $result['collection']->getTransformer());
	}

	/**
	 * Get the resource's related people.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function getPerson($id)
	{
		$response = $this->findRelatedEntites($id, $this->entityType, 'person');

		$paginator = \Paginator::make($response->getResults(), $response->getTotalHits(), $this->perPage);

		return $this->respondWithPaginator($paginator, \App::make('SearchTransformer'));
	}

	/**
	 * Get the resource's related projects.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function getProject($id)
	{
		$response = $this->findRelatedEntites($id, $this->entityType, 'project');

		$paginator = \Paginator::make($response->getResults(), $response->getTotalHits(), $this->perPage);

		return $this->respondWithPaginator($paginator, \App::make('SearchTransformer'));
	}
}

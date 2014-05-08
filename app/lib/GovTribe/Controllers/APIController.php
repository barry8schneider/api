<?php namespace GovTribe\Controllers;

use League\Fractal\Pagination\IlluminatePaginatorAdapter;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Pagination\Paginator;
use GovTribe\Response\Response;
use GovTribe\Transformers\Manager as Manager;
use GovTribe\Transformers\Transformer as Transformer;
use GovTribe\Transformers\Resource\Item as Item;
use GovTribe\Transformers\Resource\Collection as Collection;

use GovTribe\Storage\EntityRepository;

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
	protected $take = 50;

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
	public function __construct(EntityRepository $entity, Manager $manager, Transformer $transformer)
	{
		$this->entity = $entity;
		$this->fractal = $manager;
		$this->transformer = $transformer;

		if (\Input::get('page', 0) > 1) $this->skip = (\Input::get('page') - 1 ) * $this->take;

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
	 * @return self
	 */
	public function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;
		return $this;
	}

	/**
	 * Catch all for missing methods.
	 *
	 * @param  array    $parameters
	 * @return Response
	 */
	public function missingMethod($parameters = array())
	{
		return $this->errorNotFound('Hmm. I don\'t have a way to respond to this request...');
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

		return $this->respondWithArray($rootScope->toArray()['data']); 
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
	 * Error API response.
	 *
	 * @param  string   $message
	 * @return Response
	 */
	protected function respondWithError($message)
	{
		return $this->respondWithArray([ 
			'error' => [
				'code' => $this->statusCode,
				'message' => $message,
			] 
		]);
	}

	/**
	* Generates a Response with a 403 HTTP header and a given message.
	*
	* @return  Response
	*/
	public function errorForbidden($message = 'Forbidden') 
	{
		return $this->setStatusCode(403)->respondWithError($message); 
	}

	/**
	 * Generates a Response with a 500 HTTP header and a given message.
	 *
	 * @return  Response
	 */
	public function errorInternalError($message = 'Internal Error')
	{
		return $this->setStatusCode(500)->respondWithError($message);
	}

	/**
	 * Generates a Response with a 404 HTTP header and a given message.
	 *
	 * @return  Response
	 */
	public function errorNotFound($message = 'Resource Not Found') 
	{
		return $this->setStatusCode(404)->respondWithError($message);
	}

	/**
	 * Generates a Response with a 401 HTTP header and a given message.
	 *
	 * @return  Response
	 */
	public function errorUnauthorized($message = 'Unauthorized') 
	{
		return $this->setStatusCode(401)->respondWithError($message);
	}

	/**
	 * Generates a Response with a 400 HTTP header and a given message.
	 *
	 * @return  Response
	 */
	public function errorWrongArgs($message = 'Wrong Arguments') 
	{
		return $this->setStatusCode(400)->respondWithError($message);
	}

}

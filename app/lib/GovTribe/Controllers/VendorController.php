<?php namespace GovTribe\Controllers;

use Illuminate\Http\Request as Request;
use GovTribe\Storage\VendorRepository as EntityRepository;
use GovTribe\Transformers\VendorTransformer as Transformer;
use GovTribe\Transformers\Manager as Manager;

class VendorController extends APIController {

	/**
	 * Entity type for this controller.
	 *
	 * @var string
	 */
	protected $entityType = 'vendor';

	/**
	 * Create a new instance of the controller.
	 *
	 * @return self
	*/
	public function __construct(Request $request, EntityRepository $entity, Manager $manager, Transformer $transformer)
	{
		parent::__construct($request, $entity, $manager, $transformer);
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function show($id)
	{
		$columns = array(
			'name', 'type', '_id', 'timestamp',
			'sourceLink', 'market',
		);

		$entity = $this->entity->find($id, $columns);

		if (!$entity)
		{
			return $this->errorNotFound('Did you just invent an id and try loading a vendor?');
		}
		else return $this->respondWithItem($entity, $this->transformer);
	}

	/**
	 * Display a listing of the specified resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$params = [
			'take' => $this->take,
			'columns' => ['name', '_id'],
			'skip' => $this->skip,
		];

		$response = $this->entity->findRecentlyActive($params);

		$paginator = \Paginator::make($response->getResults(), $response->getTotalHits(), $this->take);

		return $this->respondWithPaginator($paginator, $this->transformer);
	}

	/**
	 * Search for entities.
	 *
	 * @return Response
	 */
	public function getSearch()
	{
		if (!$this->request->get('q')) return $this->index();

		$params = [
			'take' => $this->take,
			'columns' => ['name', '_id'],
			'skip' => $this->skip,
			'query' => $this->request->get('q'),
		];

		$response = $this->entity->search($params);

		$paginator = \Paginator::make($response->getResults(), $response->getTotalHits(), $this->take);

		return $this->respondWithPaginator($paginator, $this->transformer);
	}

	/**
	 * Get entities related to this entity for a given slice attribute.
	 *
	 * @param  string  $id
	 * @param  string  $sliceName
	 * @return Response
	 */
	public function getSlice($id, $sliceName)
	{
		$entity = $this->entity->find($id, ['_id']);
		
		if (!$entity)
		{
			return $this->index();
		}
		else
		{
			$params = [
				'take' => $this->take,
				'columns' => ['name', '_id'],
				'skip' => $this->skip,
				'sliceName' => $sliceName,
				'entity' => $entity,
			];

			$response = $this->entity->slice($params);
			$transformer = $response['collection']->getTransformer();

			$paginator = \Paginator::make($response['collection']->toNTIs(), $response['total'], $this->take);

			return $this->respondWithPaginator($paginator, $transformer);
		}
	}
}

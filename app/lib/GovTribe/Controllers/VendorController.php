<?php namespace GovTribe\Controllers;

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
	public function __construct(EntityRepository $entity, Manager $manager, Transformer $transformer)
	{
		parent::__construct($entity, $manager, $transformer);
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
		);

		if (!$entity)
		{
			return $this->errorNotFound('Did you just invent an id and try loading a vendor?');
		}
		else return $this->respondWithItem($entity, $this->transformer);
	}

	/**
	 * Display a listing of the specified resource.
	 *
	 * @param  object  $collection
	 * @return Response
	 */
	public function index()
	{
		$params = [
			'take' => $this->take,
			'columns' => ['name', '_id'],
			'skip' => $this->skip,
		];
		
		if ($q = \Input::get('q'))
		{
			$params['query'] = $q;
			$response = $this->entity->search($params);
		}
		else
		{
			$response = $this->entity->findRecentlyActive($params);
		}

		$paginator = \Paginator::make($response->getResults(), $response->getTotalHits(), $this->take);

		return $this->respondWithPaginator($paginator, $this->transformer);
	}
}

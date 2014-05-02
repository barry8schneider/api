<?php namespace GovTribe\Controllers;

use GovTribe\Models\APICollection as APICollection;
use GovTribe\Storage\AgencyRepository as Agency;
use GovTribe\Transformers\AgencyTransformer as AgencyTransformer;
use GovTribe\Transformers\Manager as Manager;
use GovTribe\Response\Response;
use GovTribe\Search\Search as Search;

class AgencyController extends APIController {

	/**
	 * Entity type for this controller.
	 *
	 * @var string
	 */
	protected $entityType = 'agency';

	/**
	 * Create a new instance of the controller.
	 *
	 * @return self
	*/
	public function __construct(Agency $agency, Manager $manager, AgencyTransformer $transformer)
	{
		parent::__construct($agency, $manager, $transformer);
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
			'name', 'type', '_id', 'acronym', 'timestamp',
			'market',
		);

		$entity = $this->entity->findOrFail($id, $columns);

		return $this->respondWithItem($entity, $this->transformer);
	}

	/**
	 * Display a listing of the specified resource.
	 *
	 * @param  object  $collection
	 * @return Response
	 */
	public function index()
	{
		$eloquentCollection = $this->entity->query()->orderBy('timestamp', 'desc');

		$paginator = $eloquentCollection->paginate($this->perPage, array('name'));

		return $this->respondWithPaginator($paginator, $this->transformer);
	}
}

<?php namespace GovTribe\Controllers;

use Illuminate\Http\Request as Request;
use GovTribe\Storage\ActivityRepository as EntityRepository;
use GovTribe\Transformers\ActivityTransformer as Transformer;
use GovTribe\Transformers\Manager as Manager;

class ActivityController extends APIController {

	/**
	 * Entity type for this controller.
	 *
	 * @var string
	 */
	protected $entityType = 'activity';

	/**
	 * Private activity message types.
	 *
	 * @var array
	 */
	protected $privateTypes = ['view', 'hord', 'unhord'];

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
			'type', '_id', 'timestamp', 'actors',
			'targets', 'participants', 'actions',
		);

		$entity = $this->entity->find($id, $columns);

		if (!$entity || in_array($entity->type, $this->privateTypes))
		{
			return $this->errorNotFound('Did you just invent an id and try loading an activity message?');
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
			'columns' => ['name', '_id', 'type'],
			'skip' => $this->skip,
			'privateTypes' => $this->privateTypes,
		];

		$response = $this->entity->findRecentlyActive($params);

		$paginator = \Paginator::make($response->getResults(), $response->getTotalHits(), $this->take);

		return $this->respondWithPaginator($paginator, $this->transformer);
	}
}

<?php namespace GovTribe\Controllers;

use Illuminate\Http\Request as Request;
use Illuminate\Config\Repository as Config;
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
	public function __construct(Request $request, Config $config, EntityRepository $entity, Manager $manager, Transformer $transformer)
	{
		parent::__construct($request, $config, $entity, $manager, $transformer);
	}

	/**
	 * Display a listing of the specified resource.
	 *
	 * @param  array  $params
	 * @return Response
	 */
	public function index(array $params = array())
	{
		$params = [
			'take' => $this->take,
			'columns' => ['name', '_id', 'type'],
			'skip' => $this->skip,
			'privateTypes' => $this->privateTypes,
		];

		return parent::index($params);
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
		$this->transformer->setMode('resource');

		if (!$entity || in_array($entity->type, $this->privateTypes))
		{
			return $this->errorNotFound('Did you just invent an id and try loading an activity message?');
		}
		else return $this->respondWithItem($entity, $this->transformer);
	}

	/**
	 * Get an activity feed for one more entities.
	 *
	 * @return Response
	 */
	public function getFeed()
	{
		$participants = explode(',', $this->request->get('ids'));
		foreach ($participants as &$id) $id = new \MongoId($id);
		$since = $this->request->get('since', time() - 31556940);

		$params = [
			'take' => $this->take,
			'columns' => ['actors', 'targets', 'actions'],
			'skip' => $this->skip,
			'participants' => $participants,
			'since' => new \MongoDate($since),
			'skip' => $this->skip,
		];

		$response = $this->entity->makeFeed($params);
		$this->transformer->setMode('resource');

		$paginator = \Paginator::make($response->all(), $response->count(), $this->take);

		return $this->respondWithPaginator(
			$paginator, 
			$this->transformer, 
			['ids' => $this->request->get('ids'), 'since' => $since]
		);
	}
}

<?php namespace GovTribe\Controllers;

use Illuminate\Http\Request as Request;
use GovTribe\Storage\PersonRepository as EntityRepository;
use GovTribe\Transformers\PersonTransformer as Transformer;
use GovTribe\Transformers\Manager as Manager;

class PersonController extends APIController {

	/**
	 * Entity type for this controller.
	 *
	 * @var string
	 */
	protected $entityType = 'person';

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
			'market', 'mail', 'position', 'phoneNumber',
			'offices', 'agencies',
		);

		$entity = $this->entity->find($id, $columns);

		if (!$entity)
		{
			return $this->errorNotFound('Did you just invent an id and try loading a person?');
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

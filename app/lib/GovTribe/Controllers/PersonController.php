<?php namespace GovTribe\Controllers;

use Illuminate\Http\Request as Request;
use Illuminate\Config\Repository as Config;
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
			'columns' => ['name', '_id', 'mail'],
			'skip' => $this->skip,
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
			'name', 'type', '_id', 'timestamp',
			'market', 'mail', 'position', 'phoneNumber',
			'offices', 'agencies',
		);

		$entity = $this->entity->find($id, $columns);
		$this->transformer->setMode('resource');

		if (!$entity)
		{
			return $this->errorNotFound('Did you just invent an id and try loading a person?');
		}
		else return $this->respondWithItem($entity, $this->transformer);
	}
}

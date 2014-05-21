<?php namespace GovTribe\Controllers;

use Illuminate\Http\Request as Request;
use Illuminate\Config\Repository as Config;
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
			'columns' => ['name', '_id'],
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
			'sourceLink', 'market',
		);

		$entity = $this->entity->find($id, $columns);
		$this->transformer->setMode('resource');

		if (!$entity)
		{
			return $this->errorNotFound('Did you just invent an id and try loading a vendor?');
		}
		else return $this->respondWithItem($entity, $this->transformer);
	}
}

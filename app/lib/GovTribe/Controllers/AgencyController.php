<?php namespace GovTribe\Controllers;

use Illuminate\Http\Request as Request;
use Illuminate\Config\Repository as Config;
use GovTribe\Storage\AgencyRepository as EntityRepository;
use GovTribe\Transformers\AgencyTransformer as Transformer;
use GovTribe\Transformers\Manager as Manager;

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
	public function __construct(Request $request, Config $config, EntityRepository $entity, Manager $manager, Transformer $transformer)
	{
		parent::__construct($request, $config, $entity, $manager, $transformer);
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
			'market', 'sourceLink',
		);

		$entity = $this->entity->find($id, $columns);
		$this->transformer->setMode('resource');

		if (!$entity)
		{
			return $this->errorNotFound('Did you just invent an id and try loading an agency?');
		}
		else return $this->respondWithItem($entity, $this->transformer);
	}
}

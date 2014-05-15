<?php namespace GovTribe\Controllers;

use Illuminate\Http\Request as Request;
use Illuminate\Config\Repository as Config;
use GovTribe\Storage\ProjectRepository as EntityRepository;
use GovTribe\Transformers\ProjectTransformer as Transformer;
use GovTribe\Transformers\Manager as Manager;
use Illuminate\Http\Request as Input;

class ProjectController extends APIController {

	/**
	 * Entity type for this controller.
	 *
	 * @var string
	 */
	protected $entityType = 'project';

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
			'name', 'type', '_id', 'timestamp',
			'NAICS', 'setAsideType', 'dueDate',
			'dueDatesByStatus', 'workflowStatus.workflowStatus',
			'people', 'goodsOrServices', 'POPs', 'placeOfPerformanceText',
			'sourceLink', 'solicitationNumbers', 'contractNumbers',
			'files', 'classCode', 'agencies', 'categories', 'raws', 'offices',
			'synopsis', 'awardValue', 'awardValueNumeric', 'vendors', 'tags',
			'protests'
		);

		$entity = $this->entity->find($id, $columns);

		if (!$entity)
		{
			return $this->errorNotFound('Did you just invent an id and try loading a project?');
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
			'columns' => ['name', '_id', 'timestamp'],
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

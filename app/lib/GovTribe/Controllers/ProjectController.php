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
	 * Allowed filters.
	 *
	 * @var array
	 */
	protected $allowedFilters = [
		'agency', 'office', 'person',
		'vendor', 'category', 'setAsideType',
		'workflowStatus'
	];

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
	public function show($id, array $columns = array('*'))
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

		return parent::show($id, $columns);
	}

	/**
	 * Search for entities.
	 *
	 * @return Response
	 */
	public function getSearch()
	{
		$params = [
			'take' => $this->take,
			'columns' => ['name', '_id'],
			'skip' => $this->skip,
			'query' => $this->request->get('q'),
			'filters' => array_intersect_key($this->request->all(), array_flip(array_merge($this->allowedFilters))),
		];

		$response = $this->entity->search($params);
		$this->transformer->setMode('index');

		$paginator = \Paginator::make($response->getResults(), $response->getTotalHits(), $this->take);

		return $this->respondWithPaginator($paginator, $this->transformer);
	}
}

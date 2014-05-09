<?php namespace GovTribe\Controllers;

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
	 * Available filters.
	 *
	 * @var array
	 */
	protected $filters = [
		'agency', 'office', 'person',
		'vendor', 'category', 'setAsideType',
		'workflowStatus'
	];

	/**
	 * Create a new instance of the controller.
	 *
	 * @return self
	*/
	public function __construct(EntityRepository $entity, Manager $manager, Transformer $transformer, Input $input)
	{
		parent::__construct($entity, $manager, $transformer, $input);
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
			'synopsis', 'awardValue', 'awardValueNumeric', 'vendors'
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

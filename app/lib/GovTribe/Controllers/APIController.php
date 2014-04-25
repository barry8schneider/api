<?php namespace GovTribe\Controllers;

use \Illuminate\Support\Facades\Response;
use \Illuminate\Routing\Controller as BaseController;
use GovTribe\Storage\EntityRepositoryInterface;

class APIController extends BaseController {

	protected $entity;

	/**
	 * Create a new instance of the controller.
	 *
	 * @return self
	*/
	public function __construct(EntityRepositoryInterface $entity)
	{
		$this->entity = $entity;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($version)
	{

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function show($id)
	{
		$columns = array_keys($this->entity->getAPITypeSpec()['properties']);

		return Response::json($this->entity->findOrFail($id, $columns)->toAPI());
	}

	public function scopePeople($query)
	{
		return $query->where('votes', '>', 100);
	}

}

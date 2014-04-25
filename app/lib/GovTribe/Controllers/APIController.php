<?php namespace GovTribe\Controllers;

use \Illuminate\Support\Facades\Response;
use \Illuminate\Routing\Controller as BaseController;
use GovTribe\Storage\EntityRepositoryInterface;

class APIController extends BaseController {

	protected $defaultSortByField = 'timestamp';
	protected $defaultSortByDirection = 'desc';

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
	 * @param  string  $version
	 * @return Response
	 */
	public function index($version)
	{

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $version
	 * @param  string  $id
	 * @return Response
	 */
	public function show($version, $id)
	{
		return Response::json($this->entity->findOrFail($id)->toAPI());
	}

	public function scopePeople($query)
	{
		return $query->where('votes', '>', 100);
	}

}

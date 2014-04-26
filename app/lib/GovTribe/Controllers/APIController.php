<?php namespace GovTribe\Controllers;

use Illuminate\Routing\Controller as BaseController;
use GovTribe\Storage\EntityRepositoryInterface;
use GovTribe\Response\Response;

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
	 * Display the specified resource.
	 *
	 * @param  string  $id
	 * @param  array   $columns
	 * @return Response
	 */
	public function show($id, array $columns = array('*'))
	{
		return Response::api($this->entity->findOrFail($id, $columns)->getAttributes());
	}

	/**
	 * Get the resource's dollar flow.
	 *
	 * @param  string  $type
	 * @param  string  $id
	 * @return Response
	 */
	public function getDollarFlow($type, $id)
	{
		$columns = array(
			'market.dollarFlow',
		);
		$rawData = $this->entity->findOrFail($id, $columns)->toArray();

		if (!isset($rawData['market']['dollarFlow']))
		{
			return Response::api(array());
		}
		else
		{
			unset($rawData['market']['dollarFlow']['allTime']);
			return Response::api($rawData['market']['dollarFlow']);
		}
	}

	/**
	 * Get the resource's recent, most awarded vendors.
	 *
	 * @param  string  $type
	 * @param  string  $id
	 * @return Response
	 */
	public function getTopVendors($type, $id)
	{
		$columns = array(
			'market.characteristics.vendors',
		);
		$rawData = $this->entity->findOrFail($id, $columns)->toArray();

		$mongo = \DB::getMongoDb();

		$cursor = $mongo->activity->find(array(
			'type' => 'project',
			'participants' => new \MongoId($id),
			'timestamp' => array('$gte' => new \MongoDate(\Carbon\Carbon::now()->subMonths(12)->timestamp))
		));

		dd($cursor->count());

		if (!isset($rawData['market']['characteristics']['vendors']))
		{
			return Response::api(array());
		}
		else
		{
			return Response::api($rawData['market']['characteristics']['vendors']);
		}
	}

}

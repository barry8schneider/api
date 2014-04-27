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
		return Response::api($this->entity->findOrFail($id, $columns)->toArray());
	}

	/**
	 * Get the resource's dollar flow.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function getDollarFlow($id)
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
	 * Get the resource's related agencies.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function getAgency($id)
	{
		return $this->makeRelatedEntities(
			$id,
			array('project'),
			'actors',
			'agency'
		);
	}

	/**
	 * Get the resource's related protests.
	 *
	 * @param  string  $type
	 * @param  string  $id
	 * @return Response
	 */
	public function getProtest($id)
	{
		return $this->makeRelatedEntities(
			$id,
			array('protest'),
			'targets',
			'protest'
		);
	}

	/**
	 * Get the resource's related offices.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function getOffice($id)
	{
		return $this->makeRelatedEntities(
			$id,
			array('project'),
			'actors',
			'office'
		);
	}

	/**
	 * Get the resource's related vendors.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function getVendor($id)
	{
		return $this->makeRelatedEntities(
			$id,
			array('project'),
			'targets',
			'vendor'
		);
	}

	/**
	 * Get the resource's related people.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function getPerson($id)
	{
		return $this->makeRelatedEntities(
			$id,
			array('project'),
			'actors',
			'person'
		);
	}

	/**
	 * Make a list of the entity's related entities.
	 *
	 * @param  string  $id
	 * @param  array   $aTypes Types of activity message to check
	 * @param  string  $field  Actors or targets
	 * @param  string  $eType  Type of related entity to find
	 * @param  int     $since  How far back to look, in months
	 * @return Response
	 */
	public function makeRelatedEntities($id, $aTypes, $field, $eType, $since = 12)
	{
		$related = array();
		$mongo = \DB::getMongoDb();

		$cursor = $mongo->activity
			->find(
				array(
					'type' => array('$in' => $aTypes),
					'participants' => new \MongoId($id),
					'timestamp' => array(
							'$gte' => 
								new \MongoDate(
										\Carbon\Carbon::now()
											->subMonths($since)
											->timestamp
								)
						)
				),
				array(
					'_id' => 0,
					$field =>
						array(
							'$elemMatch' =>
								array(
									'type' => $eType,
									'_id'  => array('$ne' => new \MongoId($id)
									)
								)
							)
				)
			);
 
		while ($cursor->hasNext())
		{
			$message = $cursor->getNext();
 
			if (isset($message[$field]))
			{
				foreach ($message[$field] as $actor)
				{
					$related[(string) $actor['_id']] = $actor;
				}
			}
		}

		return Response::api(array_values($related));
	}
}

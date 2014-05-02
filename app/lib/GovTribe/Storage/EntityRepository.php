<?php namespace GovTribe\Storage;

use GovTribe\Models\APIEntity;
use GovTribe\Models\Collection;
use GovTribe\Models\Activity;
use GovTribe\Models\Relationship;

class EntityRepository {

	public function all()
	{
		return $this->entity->all();
	}
 
	public function find($id, $columns = array('*'))
	{
		return $this->entity->find($id, $columns);
	}

	public function findOrFail($id, $columns = array('*'))
	{
		return $this->entity->findOrFail($id, $columns);
	}

	public function take($take)
	{
		return $this->entity->take($take);
	}
 
	public function orderBy($order)
	{
		return $this->entity->orderBy($order);
	}

	public function query(array $models = array())
	{
		return $this->entity->query();
	}

	/**
	 * Search for entities by name, via a RegEx query.
	 *
	 * @param  string  $query
	 * @param  array   $columns
	 * @return object
	 */
	public function searchNameRegex($query, $columns = array('*'))
	{
		$results = array();
		$mongo = \DB::getMongoDb();

		$results = $this->entity
					->where('name', 'regex', new \MongoRegex("/^$query/i"))
					->take(100)
					->orderBy('timestamp', 'desc')
					->get($columns);

		return $results;
	}

	/**
	 * Find recently active entities.
	 *
	 * @param  array   $columns
	 * @return object
	 */
	public function findRecentlyActive($columns = array('*'))
	{
		$results = array();
		$mongo = \DB::getMongoDb();

		$results = $this->entity
					->take(100)
					->orderBy('timestamp', 'desc')
					->get($columns);

		return $results;
	}

	/**
	 * Find the entity's related entities.
	 *
	 * @param  string  $id
	 * @param  string  $type  Type of related entity to find
	 * @param  int     $skip   Skip this number of records
	 * @param  int     $limit  Limit this number of records returned
	 * @return array
	 */
	public function findRelatedEntities($id, $type, $skip = 0, $limit = 25)
	{
		return Relationship::raw(function($mongoCollection) use ($id, $type, $skip, $limit)
		{
			$rTable = $mongoCollection->findOne(
				[
					'parentId' => new \MongoId($id),
					'type' => $type,
				],
				[
					'relationships' => [
						'$slice' => [
							$skip, $limit
						]
					]
				]
			);

			$collection = new Collection($rTable['relationships']);

			$relatedModelType = 'GovTribe\Models\\' . ucfirst($type);

			$collection->transform(function($relatedId) use ($relatedModelType)
			{
				return $relatedModelType::find($relatedId, array('name'));
			});

			return array('collection' => $collection, 'total' => $rTable['count']);
		});
	}
}
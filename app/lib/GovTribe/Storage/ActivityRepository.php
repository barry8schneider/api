<?php namespace GovTribe\Storage;

use GovTribe\Models\Activity;

class ActivityRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Activity $entity)
	{
		$this->entity = $entity;
	}
}
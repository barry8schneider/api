<?php namespace GovTribe\Storage;

use GovTribe\Models\Agency;

class AgencyRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Agency $entity)
	{
		$this->entity = $entity;
	}
}
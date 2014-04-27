<?php namespace GovTribe\Storage;

use GovTribe\Models\Office;

class OfficeRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Office $entity)
	{
		$this->entity = $entity;
	}
}
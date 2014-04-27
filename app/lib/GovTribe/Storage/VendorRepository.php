<?php namespace GovTribe\Storage;

use GovTribe\Models\Vendor;

class VendorRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Vendor $entity)
	{
		$this->entity = $entity;
	}
}
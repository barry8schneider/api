<?php namespace GovTribe\Storage;

use GovTribe\Models\Protest;

class ProtestRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Protest $entity)
	{
		$this->entity = $entity;
	}
}
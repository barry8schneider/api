<?php namespace GovTribe\Storage;

use GovTribe\Models\Person;

class PersonRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Person $entity)
	{
		$this->entity = $entity;
	}
}
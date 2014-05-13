<?php namespace GovTribe\Storage;

use GovTribe\Models\Person;
use GovTribe\Models\Edge;
use GovTribe\Search\Search;

class PersonRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Search $search, Person $entity, Edge $edge)
	{
		parent::__construct($search, $entity, $edge);
	}
}
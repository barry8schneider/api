<?php namespace GovTribe\Storage;

use GovTribe\Models\Protest;
use GovTribe\Models\Edge;
use GovTribe\Search\Search;

class ProtestRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Search $search, Protest $entity, Edge $edge)
	{
		parent::__construct($search, $entity, $edge);
	}
}
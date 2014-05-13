<?php namespace GovTribe\Storage;

use GovTribe\Models\Agency;
use GovTribe\Models\Edge;
use GovTribe\Search\Search;

class AgencyRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Search $search, Agency $entity, Edge $edge)
	{
		parent::__construct($search, $entity, $edge);
	}
}
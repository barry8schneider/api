<?php namespace GovTribe\Storage;

use GovTribe\Models\Office;
use GovTribe\Models\Edge;
use GovTribe\Search\Search;

class OfficeRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Search $search, Office $entity, Edge $edge)
	{
		parent::__construct($search, $entity, $edge);
	}
}
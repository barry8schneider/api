<?php namespace GovTribe\Storage;

use GovTribe\Models\Vendor;
use GovTribe\Models\Edge;
use GovTribe\Search\Search;

class VendorRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Search $search, Vendor $entity, Edge $edge)
	{
		parent::__construct($search, $entity, $edge);
	}
}
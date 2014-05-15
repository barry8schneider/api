<?php namespace GovTribe\Storage;

use Illuminate\Cache\Repository as Cache;
use GovTribe\Models\Vendor;
use GovTribe\Models\Edge;
use GovTribe\Search\Search;

class VendorRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Search $search, Vendor $entity, Edge $edge, Cache $cache)
	{
		parent::__construct($search, $entity, $edge, $cache);
	}
}
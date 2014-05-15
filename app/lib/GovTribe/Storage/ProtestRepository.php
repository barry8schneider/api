<?php namespace GovTribe\Storage;

use Illuminate\Cache\Repository as Cache;
use GovTribe\Models\Protest;
use GovTribe\Models\Edge;
use GovTribe\Search\Search;

class ProtestRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Search $search, Protest $entity, Edge $edge, Cache $cache)
	{
		parent::__construct($search, $entity, $edge, $cache);
	}
}
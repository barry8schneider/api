<?php namespace GovTribe\Storage;

use GovTribe\Models\Category;
use GovTribe\Models\Edge;
use GovTribe\Search\Search;

class CategoryRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Search $search, Category $entity, Edge $edge)
	{
		parent::__construct($search, $entity, $edge);
	}
}
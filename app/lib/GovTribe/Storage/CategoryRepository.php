<?php namespace GovTribe\Storage;

use GovTribe\Models\Category;

class CategoryRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Category $entity)
	{
		$this->entity = $entity;
	}
}
<?php namespace GovTribe\Controllers;

use GovTribe\Storage\CategoryRepository as Category;

class CategoryController extends APIController {

	/**
	 * Create a new instance of the controller.
	 *
	 * @return self
	*/
	public function __construct(Category $entity)
	{
		parent::__construct($entity);
	}
}
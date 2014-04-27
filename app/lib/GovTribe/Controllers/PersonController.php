<?php namespace GovTribe\Controllers;

use GovTribe\Storage\PersonRepository as Person;

class PersonController extends APIController {

	/**
	 * Create a new instance of the controller.
	 *
	 * @return self
	*/
	public function __construct(Person $entity)
	{
		parent::__construct($entity);
	}
}
<?php namespace GovTribe\Controllers;

use GovTribe\Storage\AgencyRepository as Agency;

class AgencyController extends APIController {

	/**
	 * Create a new instance of the controller.
	 *
	 * @return self
	*/
	public function __construct(Agency $entity)
	{
		parent::__construct($entity);
	}
}
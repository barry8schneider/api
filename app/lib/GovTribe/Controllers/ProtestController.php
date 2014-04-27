<?php namespace GovTribe\Controllers;

use GovTribe\Storage\ProtestRepository as Protest;

class ProtestController extends APIController {

	/**
	 * Create a new instance of the controller.
	 *
	 * @return self
	*/
	public function __construct(Protest $entity)
	{
		parent::__construct($entity);
	}
}
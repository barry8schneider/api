<?php namespace GovTribe\Controllers;

use GovTribe\Storage\OfficeRepository as Office;

class OfficeController extends APIController {

	/**
	 * Create a new instance of the controller.
	 *
	 * @return self
	*/
	public function __construct(Office $entity)
	{
		parent::__construct($entity);
	}
}
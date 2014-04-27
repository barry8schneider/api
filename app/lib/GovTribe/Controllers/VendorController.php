<?php namespace GovTribe\Controllers;

use GovTribe\Storage\VendorRepository as Vendor;

class VendorController extends APIController {

	/**
	 * Create a new instance of the controller.
	 *
	 * @return self
	*/
	public function __construct(Vendor $entity)
	{
		parent::__construct($entity);
	}
}
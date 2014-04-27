<?php namespace GovTribe\Controllers;

use GovTribe\Response\Response;

class ProtestController30 extends ProtestController {

	/**
	 * Display the specified resource.
	 *
	 * @param  string  $id
	 * @param  array   $columns
	 * @return Response
	 */
	public function show($id, array $columns = array('*'))
	{
		$columns = array(
			'name', 'type', '_id', 'timestamp', 'outcome'
		);

		return parent::show($id, $columns);
	}

	/**
	 * Get the resource's related vendors.
	 *
	 * @param  string  $id
	 * @return Response
	 */
	public function getVendor($id)
	{
		return $this->makeRelatedEntities(
			$id,
			array('protest'),
			'actors',
			'vendor'
		);
	}
}
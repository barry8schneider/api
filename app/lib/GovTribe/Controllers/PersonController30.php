<?php namespace GovTribe\Controllers;

use GovTribe\Response\Response;

class PersonController30 extends PersonController {

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
			'name', 'type', '_id', 'mail', 'position', 'timestamp'
		);

		return parent::show($id, $columns);
	}
}
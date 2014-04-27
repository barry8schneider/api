<?php namespace GovTribe\Controllers;

use GovTribe\Response\Response;

class CategoryController30 extends CategoryController {

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
			'name', 'type', '_id', 'timestamp'
		);

		return parent::show($id, $columns);
	}
}
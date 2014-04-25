<?php namespace GovTribe\Storage;

interface EntityRepositoryInterface {

	public function all();

	public function find($id, $columns = array('*'));

	public function findOrFail($id, $columns = array('*'));

	public function paginate($perPage);

	public function getAPITypeSpec();
}
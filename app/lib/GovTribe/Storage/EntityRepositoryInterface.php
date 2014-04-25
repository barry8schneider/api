<?php namespace GovTribe\Storage;

interface EntityRepositoryInterface {

	public function all();

	public function findOrFail($id);

	public function paginate($perPage);
}
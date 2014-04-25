<?php namespace GovTribe\Storage;

class EntityRepository implements EntityRepositoryInterface {

	public function all()
	{
		return $this->entity->all();
	}
 
	public function findOrFail($id)
	{
		return $this->entity->find($id);
	}

	public function paginate($perPage)
	{
		return $this->entity->paginate($perPage);
	}
}
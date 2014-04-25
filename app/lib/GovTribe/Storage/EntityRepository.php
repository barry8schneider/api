<?php namespace GovTribe\Storage;

class EntityRepository implements EntityRepositoryInterface {

	public function all()
	{
		return $this->entity->all();
	}
 
	public function find($id, $columns = array('*'))
	{
		return $this->entity->find($id, $columns);
	}

	public function findOrFail($id, $columns = array('*'))
	{
		return $this->entity->findOrFail($id, $columns);
	}

	public function paginate($perPage)
	{
		return $this->entity->paginate($perPage);
	}

	public function getAPITypeSpec()
	{
		return $this->entity->getAPITypeSpec();
	}
}
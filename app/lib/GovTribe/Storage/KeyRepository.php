<?php namespace GovTribe\Storage;

use GovTribe\Models\Key;

class KeyRepository {

	protected $entity;

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	 */
	public function __construct(Key $entity)
	{
		$this->entity = $entity;
	}

	public function create($input)
	{
		return $this->entity->create($input);
	}

	public function find($id, $columns = array('*'))
	{
		return $this->entity->remember(60)->find($id, $columns);
	}

	public function findByEmail($email, $columns = array('*'))
	{
		$user = $this->entity->where('email', $email)->first($columns);

		return $user;
	}

	public function isValid($key)
	{
		$key = $this->entity->where('key', $key)->remember(60)->first(['_id']);

		if ($key)
		{
			return true;
		}
		else return false;
	}

}
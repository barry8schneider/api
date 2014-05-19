<?php namespace GovTribe\Storage;

use GovTribe\Models\User;

class UserRepository {

	protected $entity;

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	 */
	public function __construct(User $entity)
	{
		$this->entity = $entity;
	}

	public function create($input)
	{
		return $this->entity->create($input);
	}

	public function findByEmail($email, $columns = array('*'))
	{
		$this->entity->getConnection()->getKinvey()->setAuthMode('admin');
		$user = $this->entity->where('username', $email)->first($columns);
		$this->entity->getConnection()->getKinvey()->setAuthMode('app');

		return $user;
	}

	public function addPlatform(User $user, $platform)
	{
		$platforms = $user->platforms;
		$platforms[] = 'api';
		$platforms = array_unique($platforms);
		$user->platforms = $platforms;

		$this->entity->getConnection()->getKinvey()->setAuthMode('admin');
		$user->save();
		$this->entity->getConnection()->getKinvey()->setAuthMode('app');

		return $user;
	}
}
<?php namespace GovTribe\Storage;

use GovTribe\Models\Project;

class ProjectRepository extends EntityRepository {

	/**
	 * Create a new instance of the repository.
	 *
	 * @return self
	*/
	public function __construct(Project $entity)
	{
		$this->entity = $entity;
	}
}
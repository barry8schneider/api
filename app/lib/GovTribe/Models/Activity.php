<?php namespace GovTribe\Models;

class Activity extends APIEntity {

	protected $connection = 'databot';
	protected $collection = 'activity';

	public function getNameAttribute()
	{
		$name = null;
		
		switch ($this->type) 
		{
			case 'protest':
				$name = 'Protest';
				break;
			
			case 'project' && isset($this->attributes['actions']['added']):
				$name = 'Posting';
				break;
			case 'project' && isset($this->attributes['actions']['updated']):
				$name = 'Update';
				break;
			case 'project' && isset($this->attributes['actions']['awarded']):
				$name = 'Award';
				break;
			case 'project' 
			&& isset($this->attributes['actions']['changedTheStatusTo']) 
			&& $this->attributes['actions']['changedTheStatusTo'] === 'Cancellation':
				$name = 'Cancellation';
				break;
		}

		return $name;
	}

	public function getActionsAttribute($actions)
	{
		if (!$actions) return [];
		
		foreach ($actions as $key => $value)
		{

			if ($key === 'addedFiles') $value = count($value);

			$actions[] = [
				'action' => $key,
				'value' => $value,
			];

			unset($actions[$key]);
		}

		return $actions;
	}
}
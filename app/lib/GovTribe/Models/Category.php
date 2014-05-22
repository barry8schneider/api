<?php namespace GovTribe\Models;

class Category extends APIEntity {

	protected $connection = 'databot';
	protected $collection = 'categories';

	public function getParentsAttribute()
	{
		$output = [];

		if (!isset($this->attributes['ancestors'])) return $output;

		if ($this->attributes['ancestors'])
		{
			foreach ($this->attributes['ancestors'] as $ancestorName)
			{
				$ancestor = Category::where('name', $ancestorName)->first(['name']);
				$output = [
					'name' => $ancestor->name,
					'type' => 'category',
					'_id' => $ancestor->_id,
				];
			}
		}

		return $output;
	}

	public function getChildrenAttribute()
	{
		$output = [];

		foreach (Category::where('ancestors', $this->name)->get(['name']) as $child)
		{
			$output[] = [
				'name' => $child->name,
				'type' => 'category',
				'_id' => $child->_id,
			];
		}

		return $output;
	}

}
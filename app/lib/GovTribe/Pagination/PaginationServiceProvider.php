<?php namespace GovTribe\Pagination;

use Illuminate\Support\ServiceProvider;

class PaginationServiceProvider extends \Illuminate\Pagination\PaginationServiceProvider {

	public function boot()
	{
		var_dump('fooi');
		die;
		App::bindShared('hash', function()
		{
			return new Snappy\Hashing\ScryptHasher;
		});

		parent::boot();
	}

}
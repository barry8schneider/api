<?php namespace GovTribe\Transformers;

use Illuminate\Support\ServiceProvider;

class TransformerServiceProvider extends ServiceProvider {

	/**
	 * Register the binding
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('AgencyTransformer', function()
		{
			return new AgencyTransformer;
		});

		$this->app->bind('CategoryTransformer', function()
		{
			return new CategoryTransformer;
		});

		$this->app->bind('OfficeTransformer', function()
		{
			return new OfficeTransformer;
		});

		$this->app->bind('PersonTransformer', function()
		{
			return new PersonTransformer;
		});

		$this->app->bind('ProtestTransformer', function()
		{
			return new ProtestTransformer;
		});

		$this->app->bind('ProjectTransformer', function()
		{
			return new ProjectTransformer;
		});

		$this->app->bind('SearchTransformer', function()
		{
			return new SearchTransformer;
		});

		$this->app->bind('VendorTransformer', function()
		{
			return new VendorTransformer;
		});
	}

}
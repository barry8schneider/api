<?php namespace GovTribe\Mandrill;

use Illuminate\Support\ServiceProvider;

class MandrillServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('Mandrill', function()
		{
			return new \Mandrill($_ENV['MANDRILL_API_KEY']);
		});
	}

	public function provides()
	{
		return ['Mandrill'];
	}
}
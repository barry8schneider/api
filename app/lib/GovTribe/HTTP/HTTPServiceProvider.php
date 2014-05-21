<?php namespace GovTribe\HTTP;

use Illuminate\Support\ServiceProvider;

class HTTPServiceProvider extends ServiceProvider {

	/**
	 * Register the binding
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->middleware('GovTribe\HTTP\RateLimiter', array($this->app));
		$this->app->middleware('GovTribe\HTTP\KeyUsageLimiter', array($this->app));
	}

}
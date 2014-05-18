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
		$this->app->middleware('GovTribe\Http\RateLimiter', array($this->app));
	}

}
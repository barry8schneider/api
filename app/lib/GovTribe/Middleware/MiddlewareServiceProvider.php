<?php namespace GovTribe\Middleware;

use Illuminate\Support\ServiceProvider;

class MiddlewareServiceProvider extends ServiceProvider {

	/**
	 * Register the binding
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->middleware( new HalManager($this->app) );
	}

}
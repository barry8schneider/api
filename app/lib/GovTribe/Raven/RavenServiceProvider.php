<?php namespace GovTribe\Raven;

use App;
use Jenssegers\Raven\RavenServiceProvider as BaseServiceProvider;

class RavenServiceProvider extends BaseServiceProvider {

	/**
	 * Register error and log listeners.
	 *
	 * @return void
	 */
	protected function registerListeners()
	{
		// Only send events to sentry if we're in production
		if (App::environment('production'))
		{
			parent::registerListeners();
		}
	}
}

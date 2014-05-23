<?php namespace GovTribe\Mixpanel;

use Mixpanel;
use Illuminate\Support\ServiceProvider;

class MixpanelServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->registerListeners();
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bindShared('mixpanel', function($app)
		{
			$projectToken = $this->app->config->get('mixpanel.projectToken');
			return Mixpanel::getInstance($projectToken);
		});
	}

	/**
	 * Register event listeners.
	 *
	 * @return void
	 */
	protected function registerListeners()
	{
		$this->app->finish(function($request, $response)
		{
			if (!$this->app->environment('production')) return;
			if (!in_array($request->segment(1), $this->app->config->get('api.routes'))) return;

			$apiUser = $this->app->make('GovTribe\Storage\KeyRepository')->find($this->app->config->get('api.sentKey'));
			
			if (!$apiUser) return;

			$action = $this->buildAction($request, $response);

			$mp = $this->app->make('mixpanel');
			$mp->identify($apiUser->email);
			$mp->people->set($apiUser->email, [
				'$first_name' => $apiUser->firstName,
				'$last_name' => $apiUser->lastName,
				'$email' => $apiUser->email,
				'$company' => $apiUser->company,
			]);

			$mp->track($action['actionName'], $action['actionDetails']);
		});
	}

	/**
	 * Return the action name, details for API actions.
	 *
	 * @param  object $request
	 * @param  object $response
	 * @return array
	 */
	protected function buildAction(\Illuminate\Http\Request $request, \Illuminate\Http\JsonResponse $response)
	{
		$actionName = 'Unknown';
		$actionDetails = [];

		switch (true)
		{
			case $request->segment(3) === 'slice':
				$actionName = 'slice ' . $request->segment(1);
				$actionDetails = ['sliceName' => $request->segment(4)];
				break;

			case $request->segment(2) === 'feed':
				$actionName = 'request feed';
				$actionDetails = ['sliceName' => $request->segment(4)];
				break;

			case $request->segment(2) === 'search':
				$actionName = 'search ' . $request->segment(1) . ' collection';
				$actionDetails = ['query' => $request->get('q')];
				break;

			case $request->segment(2):
				$actionName = 'view ' . $request->segment(1);
				$responseData = $response->getData(true);
				if (isset($responseData['name'])) $actionDetails = ['name' => $responseData['name']];
				break;

			case !$request->segment(2):
				$actionName = 'view ' . $request->segment(1) . ' collection';
				break;
		}

		return [
			'actionName' => $actionName,
			'actionDetails' => $actionDetails,
		];
	}
}

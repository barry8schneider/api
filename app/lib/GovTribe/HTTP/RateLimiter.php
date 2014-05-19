<?php namespace GovTribe\HTTP;

use Illuminate\Foundation\Application;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class RateLimiter implements HttpKernelInterface {

	/**
	 * The wrapped kernel implementation.
	 *
	 * @var \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	protected $kernel;

	/**
	 * The application instance.
	 *
	 * @var Illuminate\Foundation\Application
	 */
	protected $app;

	/**
	 * Create a new API key setter instance.
	 *
	 * @param  \Symfony\Component\HttpKernel\HttpKernelInterface  $kernel
	 * @param  \Illuminate\Foundation\Application  $app
	 * @return void
	 */
	public function __construct(HttpKernelInterface $kernel, Application $app)
	{
		$this->kernel = $kernel;
		$this->app = $app;
	}

	/**
	 * Handle the given request and get the response.
	 *
	 * @implements HttpKernelInterface::handle
	 *
	 * @param  \Symfony\Component\HttpFoundation\Request  $request
	 * @param  int   $type
	 * @param  bool  $catch
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function handle(SymfonyRequest $request, $type = HttpKernelInterface::MASTER_REQUEST, $catch = true)
	{
		// Handle on passed down request
		$response = $this->kernel->handle($request, $type, $catch);

		$isAPIRoute = in_array($request->segment(1), $this->app->config->get('api.routes'));
		$statusCode = $response->getStatusCode();
		$env = $this->app->environment();

		// Rate limit API request by key.
		if ($env !== 'local' && $statusCode === 200 && $isAPIRoute)
		{
			// Load the current API key.
			$sentKey = $this->app->config->get('api.sentKey');

			// Load the key record.
			$key = $this->app->make('GovTribe\Storage\KeyRepository')->find($sentKey, ['limits', 'email']);

			$perHourCacheKey = $key->email . ':requestslasthour';
			$perDayCacheKey = $key->email . ':requestslastday';

			$this->app->cache->add($perHourCacheKey, 0, 60);
			$this->app->cache->add($perDayCacheKey, 0, 1440);

			$perHourLimit = (int) $key->limits['perHour'];
			$perDayLimit = (int) $key->limits['perDay'];

			$perHourUsed = (int) $this->app->cache->get($perHourCacheKey);
			$perDayUsed = (int) $this->app->cache->get($perDayCacheKey);

			if ($perHourUsed > $perHourLimit)
			{
				$response = $this->app->make('Govtribe\Controllers\APIController')->setStatusCode(403)->respondWithError(
					'Requests per hour rate limit exceeded. If you need a higher limit, contact help@govtribe.com.'
				);
			}
			elseif ($perDayUsed > $perDayLimit)
			{
				$response = $this->app->make('Govtribe\Controllers\APIController')->setStatusCode(403)->respondWithError(
					'Requests per day rate limit exceeded. If you need a higher limit, contact help@govtribe.com.'
				);
			}
			else
			{
				$this->app->cache->increment($perHourCacheKey);
				$this->app->cache->increment($perDayCacheKey);
			}

			$requestsPerDayRemaining = ($perDayLimit - $perDayUsed) - 1 < 0 ? 0 : ($perDayLimit - $perDayUsed) - 1;
			$requestsPerHourRemaining = ($perHourLimit - $perHourUsed) -1 < 0 ? 0 : ($perHourLimit - $perHourUsed) -1;

			$response->headers->set('X-GT-Rate-Limit-Day-Remaining', $requestsPerDayRemaining, false);
			$response->headers->set('X-GT-Rate-Limit-Day', $perDayLimit, false);
			$response->headers->set('X-GT-Rate-Limit-Hour-Remaining', $requestsPerHourRemaining, false);
			$response->headers->set('X-GT-Rate-Limit-Hour', $perHourLimit, false);
		}

		return $response;
	}

}
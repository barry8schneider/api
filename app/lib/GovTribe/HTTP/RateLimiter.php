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

		if ($this->app->environment() !== 'local')
		{
			// Load the current API key.
			$sentKey = $this->app->config->get('api.sentKey');

			// Load the key record.
			$key = $this->app->make('GovTribe\Storage\KeyRepository')->find($sentKey, ['rateLimit', 'email']);

			// Rate limit by API key.
			$cacheKey = $key->email . ':requestslasthour';
			$requestsPerHour = $key->rateLimit;

			$this->app->cache->add($cacheKey, 0, 60);
			$count = $this->app->cache->get($cacheKey);

			if($count > $requestsPerHour)
			{
				$response = $this->app->make('Govtribe\Controllers\APIController')->setStatusCode(403)->respondWithError(
					'Rate limit exceeded. If you need a higher limit, contact help@govtribe.com.'
				);
			}
			else
			{
				$this->app->cache->increment($cacheKey);
			}

			$remaining = ($requestsPerHour - (int) $count) < 0 ? 0 : $requestsPerHour - (int) $count;
			$response->headers->set('X-GT-Rate-Limit-Remaining', $remaining, false);
			$response->headers->set('X-GT-Rate-Limit', $requestsPerHour, false);
		}

		return $response;
	}

}
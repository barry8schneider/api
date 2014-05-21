<?php namespace GovTribe\HTTP;

use Illuminate\Foundation\Application;
use Carbon\Carbon;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

class KeyUsageLimiter implements HttpKernelInterface {

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

		// Rate limit API request by key.
		if ($statusCode === 200 && $isAPIRoute)
		{
			// Load the current API key
			$sentKey = $this->app->config->get('api.sentKey');

			// Load the key record and create the cache key
			$key = $this->app->make('GovTribe\Storage\KeyRepository')->find($sentKey, ['limits', 'email']);
			$cacheKey = sprintf('keyusagelimit:%s', $key->email);

			$this->app->cache->add($cacheKey, 0, Carbon::now()->addDays(30));

			$limit = (int) $key->limits['perMonth'];
			$used = (int)  $this->app->cache->increment($cacheKey);

			if ($used > $limit)
			{
				$response = $this->app->make('GovTribe\Controllers\APIController')->setStatusCode(403)->respondWithError(
					'Too many requests for this key. If you need a higher limit, contact help@govtribe.com.'
				);
			}

			$remaining = ($limit - $used) < 0 ? 0 : $limit - $used;
			$response->headers->set('X-GT-Rate-Limit', $limit, false);
			$response->headers->set('X-GT-Rate-Limit-Remaining', $remaining, false);
		}

		return $response;
	}

}
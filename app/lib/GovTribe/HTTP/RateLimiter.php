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

		// Rate limit by IP address to 240 requests per minute.
		if ($statusCode === 200 && $isAPIRoute)
		{
			$requestsPerMinute = 240;

			$key = sprintf('ipratelimit:%s', $request->getClientIp());

			// Add an entry to the cache, if doesn't exist, create it and remember it for one minute
			$this->app->cache->add($key, 0, 1);

			// Add to count
			$count = $this->app->cache->increment($key);

			if( $count > $requestsPerMinute )
			{
				$response = $this->app->make('GovTribe\Controllers\APIController')->setStatusCode(403)->respondWithError(
					'Whoa. Send less than 4 requests per second.'
				);
			}
		}

		return $response;
	}

}
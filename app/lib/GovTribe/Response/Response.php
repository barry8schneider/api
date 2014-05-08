<?php namespace GovTribe\Response;

use Illuminate\Support\Facades\Response as BaseResponse;
use Illuminate\Http\JsonResponse;

class Response extends BaseResponse {

	/**
	 * Return a new API response from the application.
	 *
	 * @param  string|array  $data
	 * @param  int    $status
	 * @param  array  $headers
	 * @return \Illuminate\Http\JsonResponse
	 */
	public static function api($data = array(), $status = 200, array $headers = array())
	{
		$response = new JsonResponse($data, $status, $headers);

		// Add the requested API version as a header
		$version = floatval(\Config::get('api.requestedVersion')) / 10;
		$version = number_format($version, 1);
		$headers['X-GT-API-Version'] = $version;

		// Add the response time as a header
		$responseTime = microtime(true) - \Request::server('REQUEST_TIME_FLOAT', 0);
		$headers['X-GT-Response-Time'] = number_format($responseTime, 3) . ' sec';

		return new JsonResponse($data, $status, $headers);
	}
}
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
		if (is_array($data)) $data = self::makeAPISafeDataTypes($data);

		return new JsonResponse($data, $status, $headers);
	}

	/**
	 * Convert data types to their API-safe versions.
	 *
	 * @param  array $data
	 *
	 * @return array
	 */
	protected static function makeAPISafeDataTypes(array $data)
	{
		array_walk_recursive($data, function(&$item, $key)
		{
			if ($item instanceof \MongoId)
			{
				$item = (string) $item;
			}
			elseif ($item instanceof \MongoDate)
			{
				$item = $item->sec;
			}
			elseif ($item instanceof \Carbon\Carbon)
			{
				$item = $item->timestamp;
			}
			elseif ($key === 'name' && empty($item))
			{
				$item = "Not Available";
			}
		});

		return $data;
	}
}
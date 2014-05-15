<?php

/*
|--------------------------------------------------------------------------
| Set requested API version.
|--------------------------------------------------------------------------
|
| Validate and set the version of the API requested by the client. If one 
| isn't provided, or is invalid, use a default. This needs to be done
| before routes are registered. 
|
*/
$setRequestedVersion = function($requestedVersion)
{
	$requestedVersion = str_replace('.', '', $requestedVersion);

	if (!in_array($requestedVersion, Config::get('api.supportedVersions')))
	{
		Config::set('api.requestedVersion', Config::get('api.defaultVersion'));
	}
	else 
	{
		Config::set('api.requestedVersion', $requestedVersion);
	}
};
$setRequestedVersion(Request::header('x-gt-api-version'));

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('docs');
});


$registerRoutesForRequestedVersion = function($requestedVersion)
{
	$resources = array(
			'Activity', 'Agency', 'Category', 
			'Office', 'Person', 'Project',
			'Protest', 'Vendor'
		);

	foreach ($resources as $resourceName)
	{
		$resourceControllerName = 'GovTribe\Controllers\\' . $resourceName . 'Controller';

		Route::get(strtolower($resourceName) . '/search', array('uses' => $resourceControllerName . '@getSearch'));
		Route::get(strtolower($resourceName) . '/{' . strtolower($resourceName) .'}/slice/{sliceName}', array('uses' => $resourceControllerName . '@getSlice'));

		Route::resource(strtolower($resourceName), $resourceControllerName, array('only' => array('show', 'index')));
	}
};
$registerRoutesForRequestedVersion(Config::get('api.requestedVersion'));

Route::controller('/', 'GovTribe\Controllers\APIController');
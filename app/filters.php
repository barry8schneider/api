<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	//
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Application missing method.
|--------------------------------------------------------------------------
|
| If the user is about to receive a 404, redirect to root.
|
*/

App::missing(function($exception)
{
	return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});

/*
|--------------------------------------------------------------------------
| Force SSL Filter
|--------------------------------------------------------------------------
|
| Force routes to be served over ssl.
|
*/

Route::filter('force.ssl', function()
{
	if(!Request::secure())
	{
		return Redirect::secure(Request::getRequestUri());
	}
});

/*
|--------------------------------------------------------------------------
| API Version Filter
|--------------------------------------------------------------------------
|
| Validate and set the version of the API and key requested by the client. If one 
| isn't provided, or is invalid, use a default.
|
*/

Route::filter('api.version', function()
{
	$requestedVersion = Request::header('x-gt-api-version', null);
	$requestedVersion = str_replace('.', '', $requestedVersion);

	if (!in_array($requestedVersion, Config::get('api.supportedVersions')))
	{
		Config::set('api.requestedVersion', Config::get('api.defaultVersion'));
	}
	else 
	{
		Config::set('api.requestedVersion', $requestedVersion);
	}
});

/*
|--------------------------------------------------------------------------
| API Key Filter
|--------------------------------------------------------------------------
|
| Confirm a valid API key is used.
|
*/
Route::filter('api.key', function()
{
	$sentKey = Request::header('x-gt-api-key', null);
	$keyIsValid = App::make('GovTribe\Storage\KeyRepository')->isValid($sentKey);

	if(!$sentKey)
	{
		return App::make('GovTribe\Controllers\APIController')->setStatusCode(403)->respondWithError(
			'Please provide your API key as a request header (X-GT-API-Key: myapikey). Get one at https://api.govtribe.com/register'
		);
	}
	elseif ($sentKey && !$keyIsValid)
	{
		return App::make('GovTribe\Controllers\APIController')->setStatusCode(403)->respondWithError(
			'The API key you provided (' . $sentKey . ') is not valid. Contact help@govtribe.com if you need assistance.'
		);
	}
	else
	{
		Config::set('api.sentKey', $sentKey);
	}
});

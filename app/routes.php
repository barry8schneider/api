<?php

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

Route::controller('key', 'GovTribe\Controllers\EnrollmentController');

Route::group(array('before' => 'api.key|api.version', 'namespace' => 'GovTribe\Controllers'), function()
{
	Route::get('activity/feed', array('uses' => 'ActivityController@getFeed'));
	Route::resource('activity', 'ActivityController', array('only' => array('show', 'index')));

	Route::get('agency/search', array('uses' => 'AgencyController@getSearch'));
	Route::get('agency/{id}/slice/{sliceName}', array('uses' => 'AgencyController@getSlice'));
	Route::resource('agency', 'AgencyController', array('only' => array('show', 'index')));

	Route::get('category/search', array('uses' => 'CategoryController@getSearch'));
	Route::get('category/slice/{id}/{sliceName}', array('uses' => 'CategoryController@getSlice'));
	Route::resource('category', 'CategoryController', array('only' => array('show', 'index')));

	Route::get('office/search', array('uses' => 'OfficeController@getSearch'));
	Route::get('office/slice/{id}/{sliceName}', array('uses' => 'OfficeController@getSlice'));
	Route::resource('office', 'OfficeController', array('only' => array('show', 'index')));

	Route::get('person/search', array('uses' => 'PersonController@getSearch'));
	Route::get('person/slice/{id}/{sliceName}', array('uses' => 'PersonController@getSlice'));
	Route::resource('person', 'PersonController', array('only' => array('show', 'index')));

	Route::get('project/search', array('uses' => 'ProjectController@getSearch'));
	Route::resource('project', 'ProjectController', array('only' => array('show', 'index')));

	Route::get('protest/search', array('uses' => 'ProtestController@getSearch'));
	Route::resource('protest', 'ProtestController', array('only' => array('show', 'index')));

	Route::get('vendor/search', array('uses' => 'VendorController@getSearch'));
	Route::get('vendor/slice/{id}/{sliceName}', array('uses' => 'VendorController@getSlice'));
	Route::resource('vendor', 'VendorController', array('only' => array('show', 'index')));

	Route::controller('/', 'APIController');
});
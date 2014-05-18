<?php

return array(

	/*
	| -----------------------------------------------------------------------------
	| Kinvey App Key, App Secret & Master Secret
	| -----------------------------------------------------------------------------
	|
	| These are available via your Kinvey console.
	|
	*/

	'appName' => $_ENV['KINVEY_APP_NAME'],
	'appKey' => $_ENV['KINVEY_APP_KEY'],
	'appSecret' => $_ENV['KINVEY_APP_SECRET'],
	'masterSecret' => $_ENV['KINVEY_APP_MASTER_SECRET'],

	/*
	| -----------------------------------------------------------------------------
	| Kinvey REST API Host Endpoint & Version
	| -----------------------------------------------------------------------------
	|
	| The base endpoint and API version to use for all Kinvey requests.
	|
	*/

	'hostEndpoint' => 'https://baas.kinvey.com/',
	'version' => 2,

	/*
	| -----------------------------------------------------------------------------
	| Settings
	| -----------------------------------------------------------------------------
	|
	| Control the default authentication mode, logging etc.
	|
	*/

	'defaultAuthMode' 	=> 'app',
	'logging'			=> false,

);
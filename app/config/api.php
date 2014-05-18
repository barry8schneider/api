<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| API configuration settings
	|--------------------------------------------------------------------------
	*/

	'defaultVersion' => '30',
	'supportedVersions' => ['30'],
	'requestedVersion' => null,
	'sentKey' => null,
	'routes' => [
		'activity', 'agency', 'category',
		'office', 'person', 'project',
		'protest', 'vendor',
	],
);
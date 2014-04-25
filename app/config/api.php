<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| API configuration settings
	|--------------------------------------------------------------------------
	*/

	'defaultVersion' => '3',
	'requestedVersion' => null,

	'spec' => array(
		'3' => array(
			'types' => array(
				'APIEntity' => array(
					'extends' => null,
					'properties' => array(
							'name' => array(
									'with' => null,
									'default' => null,
									'args' => array(),
								),
							'type' => array(
									'with' => null,
									'default' => null,
									'args' => array(),
								),
							'_id' => array(
									'with' => null,
									'default' => null,
									'args' => array(),
							)
					)
				),
				'Agency' => array(
					'extends' => 'APIEntity',
					'properties' => array(
							'bazbot' => array(
									'with' => null,
									'default' => 'monkey',
									'args' => array(),
							)
					)
				)
			)
		)
	)
);
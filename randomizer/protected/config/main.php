<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return [
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'My Web Application',

	// preloading 'log' component
	'preload' => ['log'],

	// autoloading model and component classes
	'import' => [
		'application.models.*',
		'application.components.*',
		'ext.giix-components.*'
	],

	'modules' => [
		'gii' => [
			'class' => 'system.gii.GiiModule',
			'generatorPaths' => ['ext.giix-core'],
			'password' => "sgf7~4@$%ls"
		]
	],

	// application components
	'components' => [

		'user' => [
			// enable cookie-based authentication
			'allowAutoLogin' => true,
		],

		// uncomment the following to enable URLs in path-format

		'urlManager' => [
			'urlFormat' => 'path',
			'rules' => [
				'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			],
		],


		// database settings are configured in database.php
		'db' => require(dirname(__FILE__) . '/database.php'),

		'errorHandler' => [
			// use 'site/error' action to display errors
			'errorAction' => YII_DEBUG ? null : 'site/error',
		],

		'log' => [
			'class' => 'CLogRouter',
			'routes' => [
				[
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning',
				],
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			],
		],

	],

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params' => [
		// this is used in contact page
		'adminEmail' => 'webmaster@example.com',
	],
];

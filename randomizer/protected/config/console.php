<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return [
	'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
	'name' => 'Random Sentence Spinning Command Line Application',
	'preload' => ['log'],
	'import' => [
		'application.models.*',
		'application.components.*',
		'ext.giix-components.*'
	],
	'components' => [
		'db' => require(dirname(__FILE__) . '/database.php'),
		'log' => [
			'class' => 'CLogRouter',
			'routes' => [
				[
					'class' => 'CFileLogRoute',
					'levels' => 'error, warning'
				]
			]
		]
	]
];

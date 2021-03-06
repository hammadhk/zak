<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Garage CRM',
	'theme'=>'se7en',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.*'
	),

	'modules'=>array(
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>false,
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
						
	),

	// application components
	'components'=>array(
			
		'widgetFactory' => array(
				'widgets' => array(
						'CLinkPager' => array(
								'htmlOptions' => array(
										'class' => 'pagination'
								),
								'header' => false,
								'maxButtonCount' => 5,
								'cssFile' => false,
						),
						'CGridView' => array(
								'htmlOptions' => array(
										'class' => 'widget-content padded clearfix'
								),
								'pagerCssClass' => 'dataTables_paginate paging_full_numbers',
								'itemsCssClass' => 'table table-bordered table-striped dataTable',
								'cssFile' => false,
								'summaryCssClass' => 'dataTables_info',
								'summaryText' => 'Showing {start} to {end} of {count} entries',
								'template' => '<div class="dataTables_wrapper">{items}<div class="dataTables_info">{summary}</div>{pager}</div><br />',
						),
				),
		),

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/* array(
					'class'=>'CWebLogRoute',
				), */
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);

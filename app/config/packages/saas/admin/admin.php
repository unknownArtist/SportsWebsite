<?php

return array(
	/*
	|--------------------------------------------------------------------------
	| Admin Base Route
	|--------------------------------------------------------------------------
	| This is the base route for admin section. Any modules that provides
	| admin functionalities will automatically have this prefix.
	*/
	'base_route' => 'admin',

	/*
	|--------------------------------------------------------------------------
	| Admin Main filters
	|--------------------------------------------------------------------------
	| All controllers that extending AdminController will inherit this filter
	*/
	'main_filters' => array(
		'before' => 'can_access_admin_panel',
	),

	/*
	|--------------------------------------------------------------------------
	| Admin Packages providers
	|--------------------------------------------------------------------------
	| Similar to how L4 use service providers to register some resources,
	| here you could register a packages admin resources.
	|
	| Simply associate a package name with its responsible controller.
	*/
	'packages_providers' => array(
		'saas/identity' => 'Saas\Identity\Controllers\AdminController',
		'saas/groups' => 'Saas\Groups\Controllers\AdminController',
		'app/user' => 'App\User\Controllers\AdminController',
		'app/brand' => 'App\Brand\Controllers\AdminController',
		'app/vanity' => 'App\Vanity\Controllers\AdminController',
		'saas/log' => 'Saas\Log\Controllers\AdminController',
		'saas/message' => 'Saas\Message\Controllers\AdminController',
		'saas/badge' => 'Saas\Badge\Controllers\AdminController',
		'saas/email' => 'Saas\Email\Controllers\AdminController',
		'saas/forum' => 'Saas\Forum\Controllers\AdminController',
		'saas/finance' => 'Saas\Finance\Controllers\AdminController',
		//'saas/dummy' => 'Saas\Dummy\Controllers\AdminController',
	),
);
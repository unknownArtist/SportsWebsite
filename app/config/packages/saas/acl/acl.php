<?php

return array(
	/*
	|--------------------------------------------------------------------------
	| ACL status
	|--------------------------------------------------------------------------
	| Set on if the necessary configuration already setup
	*/
	'enabled' => true,

	/*
	|--------------------------------------------------------------------------
	| ACL user alias
	|--------------------------------------------------------------------------
	| Set to main user role name. Mostly, you'll have 'user' in your role
	| but if you're using other name for user, ensure that your main role
	| is matched with bellow value.
	*/
	'actor' => 'user',

	/*
	|--------------------------------------------------------------------------
	| ACL roles
	|--------------------------------------------------------------------------
	|
	| There are two way to setup this option :
	| 1. Specify the class that implements AclConfigInterface.
	| 2. Specify manually using an array
	*/
	'roles' => 'Saas\Groups\Groups\Eloquent\Group',

	/*
	|--------------------------------------------------------------------------
	| ACL resources
	|--------------------------------------------------------------------------
	|
	| There are two way to setup this option :
	| 1. Specify the class that implements AclConfigInterface.
	| 2. Specify manually using an array
	*/
	'resources' => 'Saas\Groups\Rules\Eloquent\Rule',

	/*
	|--------------------------------------------------------------------------
	| ACL maps
	|--------------------------------------------------------------------------
	|
	| There are two way to setup this option :
	| 1. Specify the class that implements AclConfigInterface.
	| 2. Specify manually using an array
	*/
	'maps' => 'Saas\Groups\Users\Eloquent\User',
);
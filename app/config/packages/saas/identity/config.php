<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Identity main logo
	|--------------------------------------------------------------------------
	| Specify default logo url
	*/
	'default_logo' => 'http://placehold.it/175x35',

	/*
	|--------------------------------------------------------------------------
	| Identity observable models list
	|--------------------------------------------------------------------------
	| Specify all resource that need to be observed.
	| Eg : 'user' => 'User', 
	| whereas 'user' is a model nick-name and 'User' is a model class
	*/
	'observable_models' => array(

		'user' => 'User'

	),

	/*
	|--------------------------------------------------------------------------
	| Identity data filters
	|--------------------------------------------------------------------------
	| Specify an arrays of fields that need to be filtered out.
	*/
	'filters' => array(
		'permissions',
		'activated',
		'created_at',
		'updated_at',
	),

	/*
	|--------------------------------------------------------------------------
	| Identity model's relation
	|--------------------------------------------------------------------------
	| Beware that this values will be used across identity components
	| ensure you change it into proper model(s), if you plan to change it
	*/
	'relations' => array(

		'attachment' => array(

			'model' => 'Attachment',

		),
	)
);
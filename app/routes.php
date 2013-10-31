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
// Route::get('admin/team',array('uses'=>'AdminTeamController@index'));

	Route::post('admin/login',array("uses"=>'AdminTeamController@postLogin'));
	Route::get('admin/login',array("uses"=>'AdminTeamController@getLogin'));
	Route::get('admin',array("uses"=>'AdminTeamController@getIndex'));

	
Route::get('/', function()
{
	return "root";
});
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

Route::get('admin/login',array("uses"=>'AdminTeamController@getLogin'));
Route::group(array('before' => 'auth'), function()
{	

	Route::resource('admin/','AdminTeamController');

});	
Route::get('/', function()
{
	return "root";
});
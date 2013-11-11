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

Route::resource('test','TestController');
/*--------------Rink routes-------------------------*/
	Route::get('admin/rink', 		array('uses'	=>'RinkController@getIndex')); //>>> should display created rinks 
	Route::get('admin/rink/create', array('uses'	=>'RinkController@getCreate')); //>>> should display rink form
	Route::post('admin/rink/create',array('uses'	=>'RinkController@postCreate')); // >>>Save rink form data
/*-----------------------------------------------------*/

/*--------------Auth routes-------------------------*/
	Route::get('user/logout', array('uses'	=>'AuthController@getLogout'));
	Route::get('user/activation',array('uses'=>'AuthController@getActivateUser'));
	Route::post('user/register',array("uses" =>'AuthController@postRegister'));
	Route::get('user/register',array("uses"	=>'AuthController@getRegister'));
	Route::post('login',array("uses" =>'AuthController@postLogin'));
	Route::get('login',array("uses"	=>'AuthController@getLogin'));

/*-----------------------------------------------------*/

/*--------------Profile routes-------------------------*/
	Route::get('profile',array("uses"=>'ProfileController@getIndex'));
	Route::get('profile',array("uses"=>'ProfileController@getCreate'));
	Route::post('profile',array("uses"=>'ProfileController@postCreate'));
	Route::get('profile/edit/{id}', array("uses"=>'ProfileController@getEdit'));
	Route::post('profile/{id}/edit',array("uses"=>'ProfileController@postEdit'));
/*-----------------------------------------------------*/
	Route::get('admin/team/{teamID}/edit',array('uses'=>'AdminTeamController@getEditTeam'));
	Route::post('admin/team/create',array("uses"=>'AdminTeamController@postCreateTeam'));
	Route::get('admin/team/create',array("uses"=>'AdminTeamController@getCreateTeam'));
	Route::get('admin/config',array("uses"=>'AdminConfigController@getIndex'));
	Route::post('admin/login',array("uses"=>'AdminTeamController@postLogin'));
	Route::get('admin/login',array("uses"=>'AdminTeamController@getLogin'));
	Route::get('admin/teams',array("uses"=>'AdminTeamController@getIndex'));

	

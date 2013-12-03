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

/* Routes for message */
/*-------------------*/
// Route::get('admin/team',array('uses'=>'AdminTeamController@index'));


Route::resource('test','TestController');

	/*---------------------Events-------------------------*/
	Route::post('feeds', array('uses'=>'EventController@postFeed'));
	Route::get('feeds', array('uses'=>'EventController@getFeed'));
	Route::post('events/create', array('uses'=>'EventController@postCreate'));
	Route::get('events/create', array('uses'=>'EventController@getCreate'));
	Route::get('events', array('uses'=>'EventController@getindex')); 

	/*--------------------------------------------------------------------*/

	/*---------------------Message center Routes-------------------------*/
	Route::get('user/message/create', array('uses'=>'MessageCentreController@getmessagecreate'));
	Route::get('user/messages/{id}/delete', array('uses'=>'MessageCentreController@getDelete'));
	Route::post('user/messages/{id}/reply', array('uses'=>'MessageCentreController@postReply'));
	Route::get('user/messages/{id}/{inbox_id}/reply', array('uses'=>'MessageCentreController@getReply'));
	Route::post('user/message/compose', array('uses'=>'MessageCentreController@postsendMessage'));
	Route::get('user/message/compose', array('uses'=>'MessageCentreController@getmessagecompose'));
	Route::get('user/messages', array('uses'=>'MessageCentreController@getIndex')); 

	/*--------------------------------------------------------------------*/
// /*-----------------------------Admin config---------------------------*/
// 	Route::get('admin/Config',array("uses"=>'AdminConfigController@getindex'));
// /*------------------------------------------------------*/

	Route::get('/',array("uses"=>'HomeController@getIndex'));

/*--------------schedule-------------------------*/
   Route::get('schedule',array("uses"=>'AdminTeamController@getSchedule'));
/*-----------------------------------------------------*/
/*--------------Rink routes-------------------------*/

	Route::get('admin/rinks', array('uses'=>'RinkController@getIndex')); // should display created rinks 
	Route::get('admin/rinks/create', array('uses'=>'RinkController@getCreate')); // should display rink form
	Route::post('admin/rinks/create', array('uses'=>'RinkController@postCreate')); // Save rink form data
	Route::get('admin/rinks/{id}/edit', array('uses'=>'RinkController@getEdit')); // should display rink form
	Route::post('admin/rinks/{id}/edit', array('uses'=>'RinkController@postEdit')); // Save rink form data
	Route::get('admin/rinks/{id}/delete', array('uses'=>'RinkController@getDelete')); // delete link

	//my routes
	// Route::get('rink/create', array('uses'=>'RinkController@getCreate')); // should display rink form
	// Route::post('rink/create', array('uses'=>'RinkController@postCreate')); // Save rink form data


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
	Route::post('members/{userID}/update',array('uses'=>'ProfileController@postMembersprofile'));
	Route::get('members/{userID}/profile',array('uses'=>'ProfileController@getMembersprofile'));
	Route::get('members',array("uses"=>'ProfileController@getMembers'));
	Route::get('profile',array("uses"=>'ProfileController@getIndex'));
	Route::get('profile/create',array("uses"=>'ProfileController@getCreate'));
	Route::post('profile/create',array("uses"=>'ProfileController@postCreate'));
	Route::get('profile/{id}/edit', array("uses"=>'ProfileController@getEdit'));
	Route::post('profile/{id}/edit',array("uses"=>'ProfileController@postEdit'));
	Route::get('profile/{id}/delete', array("uses"=>'ProfileController@getDelete'));
/*-----------------------------------------------------*/
	Route::get('admin/team/{teamID}/delete',array('uses'=>'AdminTeamController@getDeleteTeam'));
	Route::post('admin/team/update',array('uses'=>'AdminTeamController@postEditTeam'));
	Route::get('admin/team/{teamID}/edit',array('uses'=>'AdminTeamController@getEditTeam'));
	Route::post('admin/team/create',array("uses"=>'AdminTeamController@postCreateTeam'));
	Route::get('admin/team/create',array("uses"=>'AdminTeamController@getCreateTeam'));
	Route::get('admin/config/{scheduleID}/0',array('uses'=>'AdminTeamController@getUnPublishSchedule'));
	Route::get('admin/config/{scheduleID}/1',array('uses'=>'AdminTeamController@getPublishSchedule'));
	Route::get('admin/config/{scheduleID}/delete',array('uses'=>'AdminTeamController@getDeleteSchedule'));
	Route::post('admin/config/update',array('uses'=>'AdminTeamController@postEditSchedule'));
	Route::get('admin/config/{scheduleID}/edit',array('uses'=>'AdminTeamController@getEditSchedule'));
	Route::post('admin/config',array("uses"=>'AdminTeamController@postConfig'));
	Route::get('admin/config',array("uses"=>'AdminTeamController@getConfig'));
	Route::post('admin/login',array("uses"=>'AdminTeamController@postLogin'));
	Route::get('admin/login',array("uses"=>'AdminTeamController@getLogin'));
	Route::get('admin/teams',array("uses"=>'AdminTeamController@getIndex'));

	

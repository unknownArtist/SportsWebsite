<?php


class AdminTeamController extends BaseController {

	public function getLogin()
	{
		return View::make('admin.adminLogin');
	}
	public function postLogin()
	{

	try
		{
	    // Set login credentials
	    $credentials = array(
	        'email'    => Input::get('email'),
	        'password' 	  => Input::get('password'),
	    );

	    $rules = array(
	    	'email'		=> 'required',
	    	'password'	=> 'required'
	    );

	    $v = Validator::make($credentials, $rules);
	    	if($v->fails())
	    	{  
	    		return Redirect::to('admin/login')->withErrors($v);
	    	}

	   	  $user = Sentry::authenticate($credentials, false);
	 	  if($user->role == 0)
	 	  {
	 	  	return Redirect::to('login');
	 	  }
	    	if($user)
	    	{
	    		return Redirect::to('admin/rinks');
	    	}
	    }catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		    return Redirect::to('admin/login')->with('errors','Login field is required');
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
			return Redirect::to('admin/login')->with('errors','Password field is required');
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
			return Redirect::to('admin/login')->with('errors','Wrong password, try again');

		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			return Redirect::to('admin/login')->with('errors','User was not found');
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
			return Redirect::to('admin/login')->with('errors','User is not activated');
		}

		// The following is only required if throttle is enabled
		catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
		{
			return Redirect::to('admin/login')->with('errors','User is suspended');
		}
		catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
		{
			return Redirect::to('admin/login')->with('errors','User is banned');
		}
	}
	public function getIndex()
	{
		$medics = DB::table('team_medics')->get();
		$referee = DB::table('team_referees')->get();
		$time_keepe = DB::table('team_timeKeepers')->get();
		$previous_jersey = DB::table('team_prevJerseys')->get();

		return View::make('admin.team.index', compact('medics','referee','time_keepe','previous_jersey'))
						->with('teams',Team::all());
	}
	public function getCreateTeam()
	{	
		$rinks = Rink::all();
		$allrinks = array(''=>'Select Rink');
		foreach ($rinks as $rink) {

			$allrinks[$rink->title] = $rink->title;
		}	

		return View::make('admin.team.create')
				   ->with('rinks',$allrinks);
	}
	public function postCreateTeam()
	{ 
		$user = Sentry::getUser();
		
		
		 
		// $prev_jersy = $this->ImageCrop('previous_jerseys','teamPhotos','200','200','');
		$v = Validator::make(Input::all(), Team::$rules);
		if($v->fails())
		{
			return Redirect::to('admin/team/create')
						   ->withInput()
						   ->withErrors($v);
		}
		$team_logo = $this->ImageCrop('team_logo','teamImages','200','200','');
		$jersey_image = $this->ImageCrop('jersey_image','prevTeamImages','200','200','');
		$id = DB::table('teams')->insertGetId(
    		array(
    			// 'player_id'         =>		$playerid,
    			'team_name'			=>		Input::get('team_name'),
    			'team_logo'			=>		$team_logo,
    			'team_rink'			=>		Input::get('team_rink'),
    			'current_jersey'	=>		Input::get('current_jersey'),
    			'jersey_image'		=>		$jersey_image,
    			'president_name'	=>		Input::get('president_name'),
    			'head_coach'		=>		Input::get('head_coach'),
    			'assistant_coach'	=>		Input::get('assistant_coach'),
    			'history'			=>		Input::get('history'),
    			'founded'			=>		Input::get('founded'),
    			'disbanded'			=>		Input::get('disbanded'),
    		)
		);
		
		if($id)
		{
			$v = Validator::make(Input::all(), Team::$rules);
		if($v->fails())
		{
			return Redirect::to('admin/team/create')
						   ->withInput()
						   ->withErrors($v);
		}
			DB::table('team_photos')->insert(array(
				'team_id'	 =>	$id,
				'photo_name' =>	 $this->ImageCrop('photo_name','teamImages','800','600',''),
				'team_id'	 =>	 $id,
				'photo_name1'=>	$this->ImageCrop('photo_name1','teamImages','800','600',''),
				));
			DB::table('team_referees')->insert(array(
				'team_id'	=>	$id,
				'referee'	=>	Input::get('referees')
				));
			DB::table('team_timeKeepers')->insert(array(
				'team_id'	 =>	$id,
				'time_keeper'=>	Input::get('time_keepers')
				));
			DB::table('team_videos')->insert(array(
				'team_id'	 =>	$id,
				'video_name'=> Input::get('video_name'),
				'video_name1'=> Input::get('video_name1'),
				));
			DB::table('team_medics')->insert(array(
				'team_id'	 =>	$id,
				'medics'=>	Input::get('medics')
				));

				$d = explode(',', Input::get('previous_jerseys'));
		
		foreach($d as $key=>$value)
		{
			
			DB::table('team_prevJerseys')
			  ->insert(
		 	array(
				'team_id'	 =>	$id,
				'team_prevjerseysimg'=>	$this->ImageCrop('previous_jerseysimg','teamPhotos','800','600',''),
				'previous_jersey'   => $value
		    ));


		}
			return Redirect::to('admin/teams')->with('success','Team added successfully');
		}
	}
	public function getEditTeam()
	{  
		$id = Request::segment(3);
		$team = Team::find($id);

		$rinks = Rink::all();
		$allrinks = array(''=>'Select Rink');
		foreach ($rinks as $rink) {

			$allrinks[$rink->title] = $rink->title;
		}	
		return View::make('admin.team.edit')
				   ->with('rinks',$allrinks)
				   ->with('teams',$team);
	}
	public function postEditTeam()
	{ 
		$id = Input::get('id'); 
		$temlog 				=Input::file('team_logo');
		$photo_name 			=Input::file('photo_name');
		$photo_name1 			=Input::file('photo_name1');
		$previous_jerseysimg 	=Input::file('previous_jerseysimg');


		if($photo_name)
		{
		 	DB::table('team_photos')->insert(array(
				'team_id'	=>	$id,
				'photo_name'=>	 $this->ImageCrop('photo_name','teamImages','800','600',''),
				));
		}
		if($photo_name1)
		{
		 	DB::table('team_photos')->insert(array(
				'team_id'	=>	$id,
				'photo_name'=>	 $this->ImageCrop('photo_name1','teamImages','800','600',''),
				));
		}
		if($temlog)
		{
		 	$team_logo = $this->ImageCrop('team_logo','teamImages','200','200','');
			DB::table('teams')
				->where('id','=',Input::get('id'))
				->update(array('team_logo'=>$team_logo,));
		}
		$temjes=Input::file('jersey_image');
		if($temjes)
		{
			$jersey_image = $this->ImageCrop('jersey_image','prevTeamImages','800','600','');
			DB::table('teams')
				->where('id','=',Input::get('id'))
				->update(array('jersey_image'=>	$jersey_image,));
			}

		
			$id = DB::table('teams')
				->where('id','=',Input::get('id'))
				->update(
    		array(
    			'team_name'			=>		Input::get('team_name'),
    			'current_jersey'	=>		Input::get('current_jersey'),
			    'team_rink'			=> 		Input::get('team_rink'),
    			'president_name'	=>		Input::get('president_name'),
    			'head_coach'		=>		Input::get('head_coach'),
    			'assistant_coach'	=>		Input::get('assistant_coach'),
    			'history'			=>		Input::get('history'),
    			'founded'			=>		Input::get('founded'),
    			'disbanded'			=>		Input::get('disbanded'),
    		)
		);
		return Redirect::to('admin/teams/')->with('message','Team Updated successfully');		
	}

	public function getDeleteTeam($id)
	{

		DB::table('teams')->where('id',$id)->delete();
		
		return Redirect::to('admin/teams');
	}

	public function getConfig()
	{
		$schedules = Schedule::all();
		return View::make('admin.config.index')->with('schedules',$schedules);
	}
	public function postConfig()
	{
		$v = Validator::make(Input::all(), Schedule::$rules);
		if($v->fails())
		{
			return Redirect::to('admin/config/index')
						   ->withInput()
						   ->withErrors($v);
		}
		DB::table('schedule_sheet')->insert(
    array('schedule_sheet_link' => Input::get('schedule_link'),
    	  'active'=>0,
    	 'tittle' => Input::get('tittle'))
);
	return Redirect::to('admin/config');
	}
	
		
	public function getEditSchedule()
	{   
		$id = Request::segment(3);
		$schedules = Schedule::find($id);
		return View::make('admin.config.edit')
				   ->with('schedules',$schedules);
	}

	public function postEditSchedule()
	{
		$v = Validator::make(Input::all(), Schedule::$rules);
		if($v->fails())
		{
			return Redirect::to('admin/config/'.Input::get('id').'/edit')
						   ->withInput()
						   ->withErrors($v);
		}

		$id = DB::table('schedule_sheet')
				->where('id','=',Input::get('id'))
				->update(
    		array(
    			'tittle'			    =>Input::get('tittle'),
    			'schedule_sheet_link'	=>Input::get('schedule_link'),
    		)
		);
		return Redirect::to('admin/config/')->with('message','Team Updated successfully');		
	}

	public function getDeleteSchedule($id)
	{
		DB::table('schedule_sheet')->where('id',$id)->delete();
	return Redirect::to('admin/config/')
						->with('schedules',Schedule::all());
	}
	public function getPublishSchedule($id)
	{   
		$p= Request::segment(4);
		DB::table('schedule_sheet')
				->where('id','=',$id)
				->update(
    		array(
    			'active' =>$p,
    		));
		
		$schedules = Schedule::find($id);
	return Redirect::to('admin/config/')
						->with('schedules',Schedule::all());
	}
	public function getUnPublishSchedule($id)
	{   
		$p= Request::segment(4);
		DB::table('schedule_sheet')
				->where('id','=',$id)
				->update(
    		array(
    			'active' =>$p,
    		));
		
		$schedules = Schedule::find($id);
	return Redirect::to('admin/config/')
						->with('schedules',Schedule::all());
	}


}
<?php


class AdminTeamController extends BaseController {

	public function getLogin()
	{
		return View::make('admin.adminLogin');
	}
	public function postLogin()
	{

	    // Set login credentials
	    $credentials = array(
	        'email'    => Input::get('email'),
	        'password' 	  => Input::get('password'),
	    );

	    $rules = array(
	    	'email'		=> 'required|email',
	    	'password'	=> 'required'
	    );

	    $v = Validator::make($credentials, $rules);
	    	if($v->fails())
	    	{  
	    		return Redirect::to('admin/login')->withErrors($v);
	    	}
	   	$login = AdminLogin::where('email','=',$credentials['email'])
	   			 		   ->where('password','=',md5($credentials['password']))
	   			  		   ->count();
	    if($login)
	    {
	    	return Redirect::to('admin');
	    }else
	    	{
	    		return Redirect::to('admin/login')->with('errors',"Email or Password is wrong");
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
		return View::make('admin.team.create');
	}
	public function postCreateTeam()
	{ 
		$user = Sentry::getUser();
		// $playerid=$user->id;
		 $team_logo = $this->ImageCrop('team_logo','teamImages','200','200','');
		$jersey_image = $this->ImageCrop('jersey_image','prevTeamImages','200','200','');
		// $prev_jersy = $this->ImageCrop('previous_jerseys','teamPhotos','200','200','');
		$v = Validator::make(Input::all(), Team::$rules);
		if($v->fails())
		{
			return Redirect::to('admin/team/create')
						   ->withInput()
						   ->withErrors($v);
		}
		$id = DB::table('teams')->insertGetId(
    		array(
    			// 'player_id'         =>		$playerid,
    			'team_name'			=>		Input::get('team_name'),
    			'team_logo'			=>		$team_logo,
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
			DB::table('team_photos')->insert(array(
				'team_id'	=>	$id,
				'photo_name'=>	 $this->ImageCrop('photo_name','teamImages','200','200',''),
				'team_id'	=>	 $id,
				'photo_name1'=>	$this->ImageCrop('photo_name1','teamImages','200','200',''),
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
			
			DB::table('team_prevjerseys')->insert(
		 						array(
								'team_id'	 =>	$id,
								'team_prevjerseysimg'=>	$this->ImageCrop('previous_jerseysimg','teamPhotos','200','200',''),
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
		return View::make('admin.team.edit')
				   ->with('teams',$team);
	}
	public function postEditTeam()
	{
		$team_logo = $this->ImageCrop('team_logo','teamImages','200','200','');
		$jersey_image = $this->ImageCrop('jersey_image','prevTeamImages','200','200','');
		$v = Validator::make(Input::all(), Team::$rules);
		if($v->fails())
		{
			return Redirect::to('admin/team/'.Input::get('id').'/edit')
						   ->withInput()
						   ->withErrors($v);
		}

		$id = DB::table('teams')
				->where('id','=',Input::get('id'))
				->update(
    		array(
    			'team_name'			=>		Input::get('team_name'),
    			'team_logo'			=>		$team_logo,
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
	public function getSchedule()
	{
		$id = Sentry::getUser()->id;
		if(!$id)
		{
			echo "please login first";

		}
		else
		{
		$schedules = Schedule::where('active', 1)->get();
		return View::make('schedule.index')->with('schedules',$schedules);
	}
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
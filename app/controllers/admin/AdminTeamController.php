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
		return View::make('admin.team.index')
				   ->with('teams',Team::all());
	}
	public function getCreateTeam()
	{
		return View::make('admin.team.create');
	}
	public function postCreateTeam()
	{ 
		$team_logo = $this->ImageCrop('team_logo','teamImages','200','200','');
		$jersey_image = $this->ImageCrop('jersey_image','prevTeamImages','200','200','');
		$prev_jersy = $this->ImageCrop('previous_jerseys','teamPhotos','200','200','');
		$v = Validator::make(Input::all(), Team::$rules);
		if($v->fails())
		{
			return Redirect::to('admin/team/create')
						   ->withInput()
						   ->withErrors($v);
		}
		$id = DB::table('teams')->insertGetId(
    		array(
    			'team_name'			=>		Input::get('team_name'),
    			'team_logo'			=>		Input::get('team_logo'),
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
			DB::table('team_photo')->insert(array(
				'team_id'	=>	$id,
				'photo_name'=>	Input::get('photo_name'),
				'team_id'	=>	$id,
				'photo_name'=>	Input::get('photo_name1')
				));
			DB::table('team_photos')->insert(array(
				'team_id'	=>	$id,
				'previous_jersey'=>	$team_logo
				));
			DB::table('team_timeKeepers')->insert(array(
				'team_id'	 =>	$id,
				'time_keeper'=>	$team_logo
				));
			DB::table('team_videos')->insert(array(
				'team_id'	 =>	$id,
				'time_keeper'=>	$team_logo
				));
			DB::table('team_medics')->insert(array(
				'team_id'	 =>	$id,
				'medics'=>	$team_logo
				));

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

}
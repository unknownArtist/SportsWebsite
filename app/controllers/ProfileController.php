<?php

class ProfileController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		// Display the info here with the user_id(session) check
		$id = Sentry::getUser()->id;
   		$profile = Profile::where('user_id','=',$id)->get();
       return View::make('profile.index')->with('profiles',$profile);
	}
	public function getCreate()
	{
		$id = Sentry::getUser()->id;
		$profile = DB::table('player_profile')->where('user_id','=', $id)->get(); 

		if($profile) // here you had to place this code.. where we are displaying form.. so the logice is .. user cannot access this page
		{
			return Redirect::to('profile')->with('errors','You already have a profile');
		}

		$teams = Team::all();
		$allTeams = array();
		foreach($teams as $team)
		{
			$allTeams[$team->id] = $team->team_name;
		}
		return View::make('profile.create')->with('teams',$allTeams);
	}
	public function postCreate()
	{
		
		$userId = Sentry::getUser()->id; echo $userId;
		$user = DB::table('users')->where('id','=',$userId)->get();
		$input= Input::all();
		$id=DB::table('player_profile')->insertGetId(array(
											'team_id' => $input['team'],
											'name' => $input['name'],
											'user_id' => $userId,  // it was $id i changed it to $userId.
											'player_nickname' => $input['player_nickname'],
											'age' => $input['age'],
											'weight' => $input['weight'],
											'height' => $input['height'],
											'position' => $input['position'],
											'shoots' => $input['shoots'],
											'statistic' => $input['statistic'],
											'achievements' => $input['achievements']));
		DB::table('player_profile_photos')->insert(array(
				'player_profile_id'	=> $id,
				'player_profile_videos'	=>	$this->ImageCrop('player_profile_photos','profiles_images','200','200',''),
				));
       DB::table('player_profile_currentteam')->insert(array(
				'player_profile_id'	=> $id,
				'current_team'	=> Input::get('current_teams'),
				));
       DB::table('player_profile_prevteam')->insert(array(
				'player_profile_id'	=> $id,
				'previous_team'	=> Input::get('previous_teams'),
				));


		return Redirect::to('profile')->with('message','Profile created');




	}

	public function getEdit()
	{ 
		$id = Request::segment(2);
		$profile = Profile::find( $id );
		$teams = Team::all();
		$allTeams = array();
		foreach($teams as $team)
		{
			$allTeams[$team->id] = $team->team_name;
		}

	return View::make('profile.edit')->with('profiles',$profile)
									->with('teams',$allTeams);
	}

	public function postEdit() // its not coming ot this action 
	{	
		
		$fields = array(
			'team_id'=>Input::get('team'),
		   'name' => Input::get('name'),
		   'player_nickname' => Input::get('player_nickname'),
		   'age' => Input::get('age'),
		   'weight' => Input::get('weight'),
		   'height' => Input::get('height'),
		   'position' => Input::get('position'),
		   'shoots' => Input::get('shoots'),
		   'statistic' => Input::get('statistic'),
		   // 'current_teams' => Input::get('current_teams'),
	    //    'previous_teams' => Input::get('previous_teams'),
		   'achievements' => Input::get('achievements')
		   );

		  DB::table('player_profile')
            ->where('id','=',Request::segment(2))
            ->update($fields);
            $id = Sentry::getUser()->id;
   		$profile = Profile::where('user_id', '=', $id)->get();

            return Redirect::to('profile')
            ->with('profiles',$profile)
            ->with('message','Profile updated');

	}
	public function getDelete()
	{
		 $id = Request::segment(2);
		 $profile = Profile::find($id);
		 $profile->delete();
			//DB::table('rinks')->where('id','=',Request::segment(3))->delete();
		return Redirect::to('profile')->with('message','Record deleted successfully');
	}
	
	public function getMembers()
	{
		$id = Sentry::getUser()->id;
		if(!$id)
		{
			echo "please login first";

		}
		else
		{
		$users = User::all();
		// $user_id = Sentry::getUser()->id;
		return View::make('member.index')->with('users',$users);
	}
	}
	public function getMembersprofile($id)
	{
		$users = Profile::where('user_id', $id)->get();


		return View::make('member.edit')
				   ->with('users',$users[0]);
		// $user_id = Sentry::getUser()->id;
		
	}
	public function postMembersprofile($id)
	{
	
		DB::table('player_profile')
					->where('user_id','=',$id)
					->update(
	    		array(
	    			'name'            =>Input::get('name'),
	    			'player_nickname' =>Input::get('player_nickname'),
	    			'age'            =>Input::get('age'),
	    			'weight'         =>Input::get('weight'),
	    			'height'          =>Input::get('height'),
	    			'position'        =>Input::get('position'),
	    			'shoots'         =>Input::get('shoots'),
	    			'statistic'          =>Input::get('statistic'),
	    			'achievements'        =>Input::get('achievements'),
	    		));

			return Redirect::to('members');
		
	}
}
//http://developer13.com/post/laravel-tutorial-model-bindings
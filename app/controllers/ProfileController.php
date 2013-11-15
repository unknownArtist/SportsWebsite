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
   		$profile = DB::table('player_profile')->where('user_id', '=', $id)->get();
		
        return View::make('profile.index')->with('profiles',$profile);
	}
	public function getCreate()
	{
		// $input= Input::all();
		return View::make('profile.create');
	}
	public function postCreate()
	{
		
		$userId = Sentry::getUser()->id;
		$user = DB::table('users')->where('id','=',$userId)->get();
		//print($userId);
		$profile = DB::table('player_profile')->where('user_id','=', $userId)->get();
		if($user->id == $profile->user_id)
		{
			echo "This user has a profile already";
		}
		else
		{
		$input= Input::all();
		DB::table('player_profile')->insert(array('name' => $input['name'],
											'user_id' => $id,
											'player_nickname' => $input['player_nickname'],
											'age' => $input['age'],
											'weight' => $input['weight'],
											'height' => $input['height'],
											'position' => $input['position'],
											'shoots' => $input['shoots'],
											'statistic' => $input['statistic'],
											// 'current_teams' => $input['current_teams'],
											// 'previous_teams' => $input['previous_teams'],
											'achievements' => $input['achievements']));

		return Redirect::to('profile')->with('message','Profile created');
		$destinationPath = 'public/image/';
		Input::file('player_profile_photos')->move($destinationPath);
		//return View::make('profile.create')->with('input',$input);
	}

	}

	public function getEdit()
	{ 
		$id = Request::segment(2);
		$profile = Profile::find( $id );
	
		return View::make('profile.edit')->with('profiles',$profile);
	}

	public function postEdit() // its not coming ot this action 
	{	
		
		$fields = array(
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

            return Redirect::to('profile')->with('message','Profile updated');

	}
	public function getDelete()
	{
		 $id = Request::segment(2);
		 $profile = Profile::find($id);
		 $profile->delete();
			//DB::table('rinks')->where('id','=',Request::segment(3))->delete();
		return Redirect::to('profile')->with('message','Record deleted successfully');
	}
}
//http://developer13.com/post/laravel-tutorial-model-bindings
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
   
	}
	public function getCreate()
	{
		// $input= Input::all();
		 return View::make('profile.create');
	}
	public function postCreate()
	{
		$input= Input::all();
		DB::table('player_profile')->insert(array('name' => $input['name'],
											'player_nickname' => $input['player_nickname'],
											'age' => $input['age'],
											'weight' => $input['weight'],
											'height' => $input['height'],
											'position' => $input['position'],
											'shoots' => $input['shoots'],
											'statistic' => $input['statistic'],
											'current_teams' => $input['current_teams'],
											'previous_teams' => $input['previous_teams'],
											'achievements' => $input['achievements']));

		
		$destinationPath = 'public/image/';
		Input::file('player_profile_photos')->move($destinationPath);
		//return View::make('profile.create')->with('input',$input);

}

	public function getEdit($id)
	{
		$id = Profile::find( $id );
	
		return View::make('profile.edit')->with('id',$id);
	}

	public function postEdit($id)
	{
		$user= Input::all();
		$id = Profile::find( $id );
		DB::table('player_profile')
            ->where('id', $id)
            ->update(array('name' => $user['name']));
		//DB::table('player_profile')->update(array('name' => $user['name']));

		
	//	$destinationPath = 'public/image/';
	//	Input::file('player_profile_photos')->move($destinationPath);
		//return View::make('profile.edit')->with('user',$user);
	}
}
//http://developer13.com/post/laravel-tutorial-model-bindings
<?php

class Profile extends Eloquent {
	//protected $guarded = array();
	 protected $table = 'player_profile';
	//  public static $rules = array(
	// 	'name' 	=> 'required',
	// 	'player_nickname' => 'required',
	// 	'age' => 'required',
	// 	'weight' => 'required',
	// 	'height' => 'required',
	// 	'position' => 'required',
	// 	'statistic' => 'required',
	// 	'current_teams' => 'required',
	// 	'previous_teams' => 'required',
	// 	'achievements' => 'required'
	// );
public function getImage($id)
    {  

        $profile = ProfileImage::where('player_profile_id','=',$id)->get();
        
         return $profile[0]->player_profile_videos;

    }
public function getCurent($id)
    {  

        $profile = ProfileCurteam::where('player_profile_id','=',$id)->get();
        
         return $profile[0]->current_team;

    }
    public function getPrev($id)
    {  

        $profile = ProfilePrvteam::where('player_profile_id','=',$id)->get();
        
         return $profile[0]->previous_team;

    }
}


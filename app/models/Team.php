<?php

class Team extends Eloquent {
     protected $guarded = array();
	protected $table  = "teams";

	public static $rules = array(
		'team_logo'          =>'required',
        'previous_jerseysimg'=>'required',
        'photo_name'        =>'required',
        'photo_name1' 		=> 'required',
		'president_name' 	=> 'required',
        'jersey_image'      =>'required',
		'head_coach' 		=> 'required',
		'assistant_coach' 	=> 'required',
		'history' 			=> 'required',
		'time_keepers' 		=> 'required',
		'referees' 			=> 'required',
		'medics' 			=> 'required',
		'founded' 			=> 'required',
		'disbanded' 		=> 'required',
        'video_name1'      =>  'required'
	);

    public function getPrevJerseys($id)
    { 
        $team = TeamPrevJerseys::where('team_id','=',$id)->get();
        return $team[0]->previous_jersey;
    }
    public function getTimeKeeper($id)
    { 
        $team = TeamTimeKeeper::where('team_id','=',$id)->get();
        return $team[0]->time_keeper;
    }
     public function getMedics($id)
    { 
        $team = TeamMedics::where('team_id','=',$id)->get();
        return $team[0]->medics;
    }
      public function getReferees($id)
    { 
        $team = TeamReferees::where('team_id','=',$id)->get();
        return $team[0]->referee;
    }
}


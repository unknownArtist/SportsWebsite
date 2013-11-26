<?php

class Rink extends Eloquent {
	protected $table = 'rinks';

	public static $rules = array(
		'rink_addresse' 		=> 'required',
		'rink_seating_capacity' 	=> 'required|integer',
		'rink_change_rooms' 		=> 'required|integer',
		'rink_boardType' 	=> 'required|integer',
		'rink_homeTeams' 	=> 'required',
		'rink_opened_date' 			=> 'required',
		'rink_closed_date' 		=> 'required'
	);
	public function getImage($id)
    { 
        $rink = RinksImage::where('rink_id','=',$id)->get();
        return $rink[0]->rink_image;
    }
    
    public function getAddress($id)
    { 

        $rinks = RinksAddress::where('rink_id','=',$id)->get();
       	$a = array();
       	foreach($rinks as $key => $rink )
       	{
       		$a[] = $rink->rink_addresse;
       	}

        $d = implode(',',$a);
        return $d;
    }
    public function getHome($id)
    { 

        $rinks = RinksHome::where('rink_id','=',$id)->get();
       	$a = array();
       	foreach($rinks as $key => $rink )
       	{
       		$a[] = $rink->home_team;
       	}

        $d = implode(',',$a);
        return $d;
    }
}

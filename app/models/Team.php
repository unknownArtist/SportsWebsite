<?php

class Team extends Eloquent {
     protected $guarded = array();
	protected $table  = "teams";

	public static $rules = array(
		'team_name' 		=> 'required',
		'president_name' 	=> 'required',
		'head_coach' 		=> 'required',
		'assistant_coach' 	=> 'required',
		'history' 			=> 'required',
		'time_keepers' 		=> 'required',
		'referees' 			=> 'required',
		'medics' 			=> 'required',
		'founded' 			=> 'required',
		'disbanded' 		=> 'required'
	);
	public function teamMedics()
    {
        return $this->hasMany('TeamMedics');
    }
    public function teamPhotos()
    {
        return $this->hasMany('TeamPhotos');
    }
    public function teamPrevJerseys()
    {
        return $this->hasMany('TeamPrevJerseys');
    }
    public function teamReferees()
    {
        return $this->hasMany('TeamReferees');
    }
    public function teamTimeKeeper()
    {
        return $this->hasMany('TeamTimeKeeper');
    }
    public function teamVideo()
    {
        return $this->hasMany('TeamVideo');
    }

}

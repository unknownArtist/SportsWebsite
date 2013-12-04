<?php

class Feed extends Eloquent {

	protected $table = 'stream';
	public $timestamps = false;

	public function getUserName($userId,$teamId)
	{

		$name = Profile::where('user_id','=',$userId)
			   ->where('team_id','=',$teamId)
			   ->get();
		return $name[0]->name;
	}
	public function getDateFrm($datefr,$out_in_array=false)
	{
	$intervalo = date_diff(date_create(), date_create($datefr));
        $out = $intervalo->format("Days:%d,Hours:%H,Minutes:%i");
        if(!$out_in_array)
            return $out;
        $a_out = array();
        array_walk(explode(',',$out),
        function($val,$key) use(&$a_out){
            $v=explode(':',$val);
            $a_out[$v[0]] = $v[1];
        });
        return $a_out;
	}
}
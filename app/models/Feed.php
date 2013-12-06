<?php

class Feed extends Eloquent {

	protected $table = 'stream';
	public $timestamps = false;

	public function getUserName($userId,$teamId)
	{

		$name = Profile::where('user_id','=',$userId)
			   ->where('team_id','=',$teamId)
			   ->get();
		 foreach($name as $names )
        {
        	
          return $names->name;

        }
	}
	public function getDateFrm($datefr)
	{

		$then = new DateTime($datefr);
		$now = new DateTime();
		$delta = $now->diff($then);

		$quantities = array(
		    'year' => $delta->y,
		    'month' => $delta->m,
		    'day' => $delta->d,
		    'hour' => $delta->h,
		    'minute' => $delta->i,
		    'second' => $delta->s);

		$str = '';
		foreach($quantities as $unit => $value) {
		    if($value == 0) continue;
		    $str .= $value . ' ' . $unit;
		    if($value != 1) {
		        $str .= 's';
		    }
		    $str .=  ', ';
		}
		$str = $str == '' ? 'a moment ' : substr($str, 0, -2);


		return $str;



	
	}
}
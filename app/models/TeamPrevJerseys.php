<?php

class TeamPrevJerseys extends Eloquent {
	
	protected $table = 'team_prevJerseys';
	public $timestamps = false;

	public function team()
	{
		$this->belongsTo('teams');
	}
}

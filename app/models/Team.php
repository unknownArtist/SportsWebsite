<?php

class Team extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'team_name' => 'required',
		'team_logo' => 'required',
		'current_jersey' => 'required',
		'jersey_image' => 'required',
		// 'previous_jerseys' => 'required',
		'president_name' => 'required',
		'head_coach' => 'required',
		'assistant_coach' => 'required',
		'history' => 'required',
		'time_keepers' => 'required',
		'referees' => 'required',
		'medics' => 'required',
		'founded' => 'required',
		'disbanded' => 'required'
	);
}

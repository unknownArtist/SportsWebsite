<?php

class Schedule extends Eloquent {

	protected $table = 'schedule_sheet';
	public $timestamps = false;

	public static $rules = array(
		'schedule_link' 		=> 'required',
		'tittle' 		=> 'required'
	);
}
<?php

class EventController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getindex()
	{
		$events = Calender::all(); 
		
		return View::make('event.index')->with('events',$events);
	}
	public function getCreate()
	{
		return View::make('event.create');
	}
	public function postCreate()
	{
 	
		$fields = array(
			            'ev_name'    => Input::get('ev_name'),
			            'ev_time' 		      => Input::get('ev_time'),
			            'ev_place' 		      => Input::get('ev_place')
			            );
           
			$rules = array(
		            'ev_name'        => 'required',
		            'ev_time' 	     => 'required',
		            'ev_place'        => 'required'
		           
		        );
			
		    $v = Validator::make($fields, $rules);
			        if ($v->fails()) 
			        {

			        	

			return Redirect::to('events/create')
						   ->withInput()
						   ->withErrors($v);

			        }

		 DB::table('event')->insert(array(
											'ev_name'    => $fields['ev_name'],
											'ev_time'    => $fields['ev_time'],
											'ev_place'  => $fields['ev_place']
												));
		$events = Calender::all(); 
		
		return Redirect::to('event.index')->with('events',$events);
	}
	
}
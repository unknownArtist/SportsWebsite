<?php

class EventController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getindex()
	{
		$id = Sentry::getUser()->id;
		if(!$id)
		{
			echo "please login first";

		}
		else
		{
		$events = Calender::all(); 
		
		return View::make('event.index')->with('events',$events);
	}
	}
	public function getCreate()
	{
		$events = Calender::all(); 
		return View::make('event.createevent')->with('events',$events);
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

			        	

			return Redirect::to('events/createevent')
						   ->withInput()
						   ->withErrors($v);

			        }

		 DB::table('event')->insert(array(
											'ev_name'    => $fields['ev_name'],
											'ev_time'    => $fields['ev_time'],
											'ev_place'  => $fields['ev_place']
												));
		$events = Calender::all(); 
		
		return Redirect::to('events/createevent')->with('events',$events);
	}
	public function getFeed()
	{
		$team = Sentry::getUser()->id;
		$events = Calender::all(); 
		 
		 $teams_id = Profile::where('user_id','=',$team)->get();
		foreach ($teams_id as $team_id)
		{
	 		$my_teamid= $team_id->team_id;
	 		

		}

		 	
			
			$stream = Feed::where('team_id','=',$my_teamid)
	                  ->orderBy('id','DESC')
                      ->get();

        
		 	
		 		return View::make('feed.index')
							->with('events',$events)
							->with('streams',$stream);
						
}
	
	public function postFeed()
	{
		 $user_id = Sentry::getUser()->id;
		
		 $teams_id = Profile::where('user_id','=',$user_id)->get();
		 foreach ($teams_id as $team_id)
		 	{
		 		$my_teamid= $team_id->team_id;
		 		
			}

			$fields = array(
			            'stream'    => Input::get('stream') );
           
			$rules = array(
		            'stream'        => 'required');
			
		    $v = Validator::make($fields, $rules);
			        if ($v->fails()) 
			        {

			        	

			return Redirect::to('feeds/create')
						   ->withInput()
						   ->withErrors($v);

			        }
			        $date = date('Y-m-d H:i:s');

			 DB::table('stream')->insert(array(
											'user_id'    => $user_id,
											'team_id'    => $my_teamid,
											'stream'     => $fields['stream'],
											'created_at' =>$date,
												));
	return Redirect::to('feeds');
	}
}
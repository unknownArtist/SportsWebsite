<?php
class MessageCentreController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$user = Sentry::getUser();
		$inbox = Inbox::where('from_user','=',$user->id)
               ->where('read_status','=',1)
               ->get();

     if ($inbox->isEmpty() )
		{
			return Redirect::to('user/message/create');
		}
        
            
         
          foreach($inbox as $inboxs)
		 {     $tem=$inboxs->to_user;

		 	}
		 	
		$emails=Profile::where('team_id','=',$tem)
               ->get();
               
            foreach($emails as $email)
		 {     $name=$email->name;
		 	
		 	
		 	}
			return View::make('message.index')
					->with('inboxs',$inbox)
					->with('email',$name);
			
	}

	public function getmessagecompose()
	{
		$teams = Team::all();
		
		foreach($teams as $team)
		{
			$allTeams[$team->id] = $team->team_name;
		}
        return View::make('message.messagecompose')->with('teams',$allTeams);
	}

	 public  function postsendMessage()
  {	 
 		$fields = array(
 			'from_user'	 =>	Sentry::getUser()->id,
 			'to_user'		 =>	Input::get('to'),
 			'subject'		 =>	Input::get('subject'),
 			'body'			 =>	Input::get('body'),
      		'created_at' => date("Y-m-d H:i:s"),
 		);

 		DB::table('inbox')->insert($fields);

    if(Input::get('detail'))
    {
      return Redirect::to('user/messages/'.$fields['from_user'].'/detail/'.Input::get('id'));
    }
 	return Redirect::to('user/messages');
  }
  public function getRply()
  { 
    $id = Request::segment(3);

    $teams = Team::where('player_id','=',$id)
               ->get();
		$allTeams = array();
		foreach($teams as $team)
		{
			$allTeams[$team->id] = $team->team_name;
		}
 		return View::make('message.messagecompose')->with('teams',$allTeams);
  }
  public function getDelete()
	{
		 $id = Request::segment(3);
		 $inbox = Inbox::find($id);
		 $inbox->delete();
			//DB::table('rinks')->where('id','=',Request::segment(3))->delete();
		return Redirect::to('user/messages')->with('message','Record deleted successfully');
	}
	public function getmessagecreate()

	{
	return View::make('message.create');
	}





}

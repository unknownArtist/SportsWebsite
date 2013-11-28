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

    $inbox =  Inbox::where('from_user','=',$user->id)
               ->where('read_status','=',1)
               ->get();
              foreach($inbox as $inboxs)
		{     $tem=$inboxs->to_user;
			

		}
		
             
               
return View::make('message.index')
					->with('inboxs',$inbox)
					;
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
  public function getmessageDetail()
  { 
      $message = DB::table('inbox')
                   ->where('from_user','=',Request::segment(3))
                   ->take(10)
                   ->orderBy('id','DESC')
                   ->get();
      DB::table('inbox')->where('id','=',Request::segment(5))->update(array('read_status'=>0));
      return View::make('saas::message.message_detail')
                 ->with('msg',$message)
                 ->with('unread_messages',Message::inboxCount());
  }



}

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
		$inbox = Inbox::where('to_user','=',$user->id)
	                  ->where('read_status','=',1)
                      ->get();

     if ($inbox->isEmpty() )
		{
			return Redirect::to('user/message/create');
		}
        
            
         
          foreach($inbox as $inboxs)
		 {     $tem=$inboxs->to_user;

		 	}
		 	
		$emails=Profile::where('user_id','=',$tem)
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
		$profiles = Profile::all();
		$allTeamsMember = array();
		foreach($profiles as $profile)
		{
			if($profile->user_id != Sentry::getUser()->id)
			{
				$allTeamsMember[$profile->user_id] = $profile->name;
			}
				
		}
        return View::make('message.messagecompose')->with('teams',$allTeamsMember);
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

    $profiles = Profile::where('user_id','=',$id)
               ->get();
		$allTeamsMember = array();
		foreach($profiles as $profile)
		{
			if($profile->user_id != Sentry::getUser()->id)
			{
				$allTeamsMember[$profile->user_id] = $profile->name;
		
			}
		}
 		return View::make('message.messagecompose')->with('teams',$allTeamsMember);
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

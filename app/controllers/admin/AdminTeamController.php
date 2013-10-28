<?php


class AdminTeamController extends Controller {

	public function getLogin()
	{
		return View::make('admin.adminLogin');
	}
	public function postLogin()
	{

	    // Set login credentials
	    $credentials = array(
	        'email'    => Input::get('email'),
	        'password' 	  => Input::get('password'),
	    );

	    $rules = array(
	    	'email'		=> 'required|email',
	    	'password'	=> 'required'
	    );

	    $v = Validator::make($credentials, $rules);
	    	if($v->fails())
	    	{  
	    		return Redirect::to('admin/login')->withErrors($v);
	    	}
	   	$login = AdminLogin::where('email','=',$credentials['email'])
	   			 		   ->where('password','=',md5($credentials['password']))
	   			  		   ->count();
	    if($login)
	    {
	    	return Redirect::to('admin');
	    }else
	    	{
	    		return Redirect::to('admin/login')->with('errors',"Email or Password is wrong");
	    	}

	}
	public function getIndex()
	{
		return "Hello";
	}

}
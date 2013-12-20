<?php

class AuthController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getLogin()
	{
        return View::make('auth.login');
	}
	public function postLogin()
	{		
		try
		{

    // Set login credentials
			$credentials = array(
			'email'		=>		Input::get('email'),
			'password'	=>		Input::get('password')
		);

				    // Try to authenticate the user
				    $user = Sentry::authenticate($credentials, false);
				    if($user)
				    {
				    	return Redirect::to('profile');
				    }
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		    return Redirect::to('login')->with('errors','Login field is required');
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
			return Redirect::to('login')->with('errors','Password field is required');
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
			return Redirect::to('login')->with('errors','Wrong password, try again');

		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			return Redirect::to('login')->with('errors','User was not found');
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
			return Redirect::to('login')->with('errors','User is not activated');
		}

		// The following is only required if throttle is enabled
		catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
		{
			return Redirect::to('login')->with('errors','User is suspended');
		}
		catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
		{
			return Redirect::to('login')->with('errors','User is banned');
		}
	}
	public function getRegister()
	{
		return View::make('auth.register');
	}
	public function postRegister()
	{
		try
		{
    // Let's register a user.
			$user = Sentry::register(array(
			        'email'    => Input::get('email'),
			        'password' => Input::get('password'),
			    ));

			    // Let's get the activation code
			    $activationCode = $user->getActivationCode();
			    if($activationCode)
			    {
			    	$URL = 'http://'.$_SERVER['HTTP_HOST']."/user/activation?code=".$activationCode."&email=".$user['email'];
			    	$this->sendTo($user['email'],array('activationCode'=>$URL));
			    	return Redirect::to('user/register')->with('success','Email has been sent to you');
			    }
			    

			    // Send activation code to the user so he can activate the account
			}
			catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
			{
				return Redirect::to('user/register')->with('errors','Login field is required');
			}
			catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
			{
				return Redirect::to('user/register')->with('errors','Password field is required');
			}
			catch (Cartalyst\Sentry\Users\UserExistsException $e)
			{
				return Redirect::to('user/register')->with('errors','User with this login already exists');
			}
			
	}
	public function getActivateUser()
	{
		try
		{
		    // Find the user using the user id
		    $user = Sentry::findUserByLogin(Input::get('email'));

		    // Attempt to activate the user
		    if ($user->attemptActivation(Input::get('code')))
		    {
				return Redirect::to('login')->with('success','User Activated Successfully');
		    }
		    else
		    {
		        return Redirect::to('login')->with('errors','User cannot activated');
		    }
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
			return Redirect::to('user/register')->with('errors','User was not found');
		}
		catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e)
		{
			return Redirect::to('user/register')->with('errors','User is already activated');
		}
	}

	public function getLogout()
	{
		if(Sentry::logout())
		{
			return Redirect::to('/')->with('success',"You are successfully logout");
		}
		
	}

	public function getChangePassword()
	{
        return View::make('auth.change_password');
	}

	

}
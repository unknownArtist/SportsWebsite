<?php

class HomeController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        return View::make('home.index');
	}
	public function getHome()
	{ 
		 return View::make('home.loginhome');
	}

	

}

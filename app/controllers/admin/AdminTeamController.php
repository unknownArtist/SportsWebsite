<?php


class AdminTeamController extends Controller {

	public function getLogin()
	{
		return View::make('admin.adminLogin');
	}
	public function postLogin()
	{
		echo "post hello";
	}
	public function getIndex()
	{
		return "Hello";
	}

}
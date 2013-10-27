<?php


class AdminTeamController extends Controller {

	public function getLogin()
	{
		return View::make('admin.adminLogin');
	}
	public function index()
	{
		return "Hello";
	}

}
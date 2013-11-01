<?php


class AdminConfigController extends Controller {

	public function getIndex()
	{
		return View::make('admin.config.index');
	}
}
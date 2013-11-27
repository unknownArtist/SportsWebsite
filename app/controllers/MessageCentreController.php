<?php

class MessageCentreController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        return View::make('message.index');
	}

	public function getmessagecompose()
	{
        return View::make('message.messagecompose');
	}



}

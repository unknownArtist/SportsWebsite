<?php

class RinkController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
        return View::make('admin.rinks.index');
	}
	public function getCreate()
	{
	return View::make('admin.rinks.create');
	}
	public function postCreate()
	{
		$input= Input::all();
		DB::table('rinks')->insert(array(
											'rink_seating_capacity' => $input['rink_seating_capacity'],
											'rink_change_rooms' => $input['rink_change_rooms'],
											'rink_boardType' => $input['rink_boardType'],
											'rink_other' => $input['rink_other'],
											'rink_homeTeams' => $input['rink_homeTeams'],
											'rink_highlights' => $input['rink_highlights'],
											'rink_history' => $input['rink_history'],
											'rink_opened_date' => $input['rink_opened_date'],
											'rink_closed_date' => $input['rink_closed_date'],
											'rink_description' => $input['rink_description']));
			//videos are to be inserted

		//rink images in rink_images table should be inserted	
		//DB::table('rink_images')->insert(array('rink_layout_image' => Input::file('rink_layout_image')));
		$destinationPath = 'public/image/';
		Input::file('rink_layout_image')->move($destinationPath); //rink image in rink images table
		
		//rink addresses in rink_addresses table should be inserted	
		//DB::table('rink_addresses')->insert(array('rink_addresse') => $input['rink_addresse']));

	}
	public function getEdit($id)
	{
		$id = Request::segment(2);
		$rink = Rink::find( $id );
	
		return View::make('admin.rinks.edit')->with('rinks',$rink);
	}
	public function postEdit($id)
	{
		$id = Request::segment(2);
		$rink = Rink::find($id);
		
		$input= Input::all();
		DB::table('rinks')->insert(array(
											$rink->rink_seating_capacity = $input['rink_seating_capacity'],
											$rink->rink_change_rooms = $input['rink_change_rooms'],
											$rink->rink_boardType = $input['rink_boardType'],
											$rink->rink_other = $input['rink_other'],
											$rink->rink_homeTeams = $input['rink_homeTeams'],
											$rink->rink_highlights = $input['rink_highlights'],
											$rink->rink_history = $input['rink_history'],
											$rink->rink_opened_date = $input['rink_opened_date'],
											$rink->rink_closed_date = $input['rink_closed_date'],
											$rink->rink_description = $input['rink_description']));
		$rink->save();
			//videos are to be inserted

		//rink images in rink_images table should be inserted	
		//DB::table('rink_images')->insert(array('rink_layout_image' => Input::file('rink_layout_image')));
		$destinationPath = 'public/image/';
		Input::file('rink_layout_image')->move($destinationPath); //rink image in rink images table
	}
}

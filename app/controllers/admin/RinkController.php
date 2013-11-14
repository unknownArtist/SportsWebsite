<?php

class RinkController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$rink = DB::table('rinks')->get();
		
        return View::make('admin.rinks.index')->with('rinks',$rink);
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
		
		$rink = DB::table('rinks')->get();
		return View::make('admin.rinks.index')->with('rinks',$rink);
		//rink addresses in rink_addresses table should be inserted	
		//DB::table('rink_addresses')->insert(array('rink_addresse') => $input['rink_addresse']));

	}
	public function getEdit()
	{
		$id = Request::segment(3);
		$rink = Rink::find( $id );
	
		return View::make('admin.rinks.edit')->with('rinks',$rink);
	}
	public function postEdit()
	{
		$fields = array('rink_seating_capacity' => Input::get('rink_seating_capacity'),
						 'rink_change_rooms' => Input::get('rink_change_rooms'),
						 'rink_boardType' => Input::get('rink_boardType'),
						 'rink_other' =>Input::get('rink_other'),
						  'rink_homeTeams' => Input::get('rink_homeTeams'),
						  'rink_highlights' =>Input::get('rink_highlights'),
						  'rink_history' =>Input::get('rink_history'),
						  'rink_opened_date' => Input::get('rink_opened_date'),
						   'rink_closed_date' => Input::get('rink_closed_date'),
						   'rink_description' => Input::get('rink_description'));
		
		
		$destinationPath = 'public/image/';
		Input::file('rink_layout_image')->move($destinationPath); //rink image in rink images table
		DB::table('rinks')
			->where('id','=',Request::segment(3))
			->update($fields);

		return Redirect::to('admin/rinks')->with('message','Updation successful');
		
	}
	public function getDelete()
	{
		 $id = Request::segment(3);
		 $rink = Rink::find($id);
		 $rink->delete();
			//DB::table('rinks')->where('id','=',Request::segment(3))->delete();
		return Redirect::to('admin/rinks')->with('message','Record deleted successfully');
		
	}
	
}

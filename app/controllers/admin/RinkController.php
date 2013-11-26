<?php

class RinkController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$rinks = Rink::all();
		
        return View::make('admin.rinks.index')->with('rinks',$rinks);
	}
	public function getCreate()
	{
	return View::make('admin.rinks.create');
	}
	public function postCreate()
	{

		$v = Validator::make(Input::all(), Rink::$rules);
		if($v->fails())
		{
			return Redirect::to('admin/rinks/create')
						   ->withInput()
						   ->withErrors($v);
		}
		$id = DB::table('rinks')->insertGetId(array(
											'rink_seating_capacity' => Input::get('rink_seating_capacity'),
											'rink_change_rooms' => Input::get('rink_change_rooms'),
											'rink_boardType' => Input::get('rink_boardType'),
											'rink_other' => Input::get('rink_other'),
											'rink_highlights' => Input::get('rink_highlights'),
											'rink_history' => Input::get('rink_history'),
											'rink_opened_date' => Input::get('rink_opened_date'),
											'rink_closed_date' => Input::get('rink_closed_date'),
											'rink_description' => Input::get('rink_description')
												));

			
			
		if($id)
		{
			 $d = explode(',', Input::get('rink_addresse'));
		
			foreach($d as $key=>$value)
			{
			DB::table('rink_addresses')->insert(array(
				'rink_id'	=>$id,
				'rink_addresse'=>$value,
				));
			}
			 $d = explode(',', Input::get('rink_homeTeams'));
		
			foreach($d as $key=>$value)
			{
			DB::table('rink_home_teams')->insert(array(
				'rink_id'	=> $id,
				'home_team'	=>	$value,
				));
			}
			DB::table('rink_images')->insert(array(
				'rink_id'	=>	$id,
				'rink_image'=>	$this->ImageCrop('rink_layout_image','rinks_images','200','200',''),
				));
}


		$rinks = Rink::all(); 
		
		return View::make('admin.rinks.index')->with('rinks',$rinks);
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

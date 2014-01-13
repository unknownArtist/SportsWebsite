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
	public function getTeams()
	{
		$medics = DB::table('team_medics')->get();
		$referee = DB::table('team_referees')->get();
		$time_keepe = DB::table('team_timeKeepers')->get();
		$previous_jersey = DB::table('team_prevJerseys')->get();

		return View::make('team.index', compact('medics','referee','time_keepe','previous_jersey'))
						->with('teams',Team::paginate(20));;
	}
	public function getRinks()
	{
		$rinks = Rink::paginate(20);
		
        return View::make('rinks.index')->with('rinks',$rinks);
	}
	public function getRinkDetails()
	{
		return 'details';
	}

	

}

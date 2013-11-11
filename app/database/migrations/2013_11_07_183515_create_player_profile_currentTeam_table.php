<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerProfileCurrentTeamTable extends Migration {

	public function up()
	{
		Schema::create('player_profile_currentTeam', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('player_profile_id')->unsigned();
			$table->string('current_team');
		});
	}

	public function down()
	{
		Schema::drop('player_profile_currentTeam');
	}
}
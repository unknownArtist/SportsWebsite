<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamTimeKeepersTable extends Migration {

	public function up()
	{
		Schema::create('team_timeKeepers', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('team_id')->unsigned();
			$table->string('time_keeper');
		});
	}

	public function down()
	{
		Schema::drop('team_timeKeepers');
	}
}
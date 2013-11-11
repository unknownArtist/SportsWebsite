<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamRefereesTable extends Migration {

	public function up()
	{
		Schema::create('team_referees', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('team_id')->unsigned();
			$table->string('referee');
		});
	}

	public function down()
	{
		Schema::drop('team_referees');
	}
}
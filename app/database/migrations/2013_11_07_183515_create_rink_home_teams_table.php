<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRinkHomeTeamsTable extends Migration {

	public function up()
	{
		Schema::create('rink_home_teams', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('rink_id')->unsigned();
			$table->string('home_team');
		});
	}

	public function down()
	{
		Schema::drop('rink_home_teams');
	}
}
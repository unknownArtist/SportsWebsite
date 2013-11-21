<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamPrevJerseysTable extends Migration {

	public function up()
	{
		Schema::create('team_prevJerseys', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('team_id')->unsigned();
			$table->string('previous_jersey');
			$table->string('team_prevjerseysimg',300);
		});
	}

	public function down()
	{
		Schema::drop('team_prevJerseys');
	}
}
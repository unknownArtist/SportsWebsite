<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamMedicsTable extends Migration {

	public function up()
	{
		Schema::create('team_medics', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('team_id');
			$table->string('medics');
		});
	}

	public function down()
	{
		Schema::drop('team_medics');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamsTable extends Migration {

	public function up()
	{
		Schema::create('teams', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('team_name', 255);
			$table->string('team_logo', 300)->nullable();
			$table->string('current_jersey', 255)->nullable();
			$table->string('jersey_image', 300)->nullable();
			$table->string('president_name', 255)->nullable();
			$table->string('head_coach', 255)->nullable();
			$table->string('assistant_coach')->nullable();
			$table->text('history')->nullable();
			$table->date('founded')->nullable();
			$table->date('disbanded')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('teams');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerProfileTable extends Migration {

	public function up()
	{
		Schema::create('player_profile', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 255);
			$table->string('player_nickname')->nullable();
			$table->date('age')->nullable();
			$table->timestamps();
			$table->decimal('weight')->nullable();
			$table->decimal('height')->nullable();
			$table->string('position', 255);
			$table->string('shoots', 255);
			$table->string('statistic');
			$table->enum('current_teams', array(''));
			$table->enum('previous_teams', array(''));
			$table->text('achievements')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('player_profile');
	}
}
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
			$table->decimal('weight')->nullable();
			$table->decimal('height')->nullable();
			$table->string('position', 255);
			$table->string('shoots', 255);
			$table->string('statistic');
			$table->text('achievements')->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('player_profile');
	}
}
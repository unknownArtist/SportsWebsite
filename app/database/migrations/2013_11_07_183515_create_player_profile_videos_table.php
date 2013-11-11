<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePlayerProfileVideosTable extends Migration {

	public function up()
	{
		Schema::create('player_profile_videos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('player_profile_id')->unsigned();
			$table->string('player_profile_videos', 300);
		});
	}

	public function down()
	{
		Schema::drop('player_profile_videos');
	}
}
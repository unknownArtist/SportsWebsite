<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamVideosTable extends Migration {

	public function up()
	{
		Schema::create('team_videos', function(Blueprint $table) {
			$table->integer('team_id')->unsigned();
			$table->string('video_name', 300);
		});
	}

	public function down()
	{
		Schema::drop('team_videos');
	}
}
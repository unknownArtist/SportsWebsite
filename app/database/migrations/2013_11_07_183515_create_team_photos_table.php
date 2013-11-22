<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTeamPhotosTable extends Migration {

	public function up()
	{
		Schema::create('team_photos', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('team_id')->unsigned();
			$table->string('photo_name', 300);
			$table->string('photo_name1', 300);
		});
	}

	public function down()
	{
		Schema::drop('team_photos');
	}
}
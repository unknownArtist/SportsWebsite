<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRinkImagesTable extends Migration {

	public function up()
	{
		Schema::create('rink_images', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('rink_id')->unsigned();
			$table->string('rink_image', 300)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('rink_images');
	}
}
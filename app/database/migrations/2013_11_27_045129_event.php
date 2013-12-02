<?php

use Illuminate\Database\Migrations\Migration;

class Event extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event', function($table) {
			$table->increments('id');
			$table->string('ev_name');
			$table->dateTime('ev_time');
			$table->string('ev_place');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('event');
	}

}
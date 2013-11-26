<?php

use Illuminate\Database\Migrations\Migration;

class ScheduleSheet extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schedule_sheet', function($table) {
			$table->increments('id');
			$table->string('tittle');
			$table->string('schedule_sheet_link');
			$table->integer('active');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('schedule_sheet');
	}

}
<?php

use Illuminate\Database\Migrations\Migration;

class Stream extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stream', function($table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('team_id');
			$table->string('stream',1500);
			$table->timestamp('created_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('stream');
	}

}
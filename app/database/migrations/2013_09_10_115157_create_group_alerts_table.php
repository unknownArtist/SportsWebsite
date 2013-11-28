<?php

use Illuminate\Database\Migrations\Migration;

class CreateGroupAlertsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_alert',function($t)
		{
			$t->increments('id');
			$t->integer('message_id')->foreign('alert_id')->references('id')->on('alerts');
			$t->integer('user_id')->foreign('user_id')->references('id')->on('users');
			$t->integer('group_id');
			$t->integer('read_status')->unsigned()->default(1);
			$t->timestamp('created_at');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('group_alert');
	}

}
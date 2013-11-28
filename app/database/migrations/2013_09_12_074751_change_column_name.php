<?php

use Illuminate\Database\Migrations\Migration;

class ChangeColumnName extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::rename('group_alert','alert_group');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::rename('alert_group','group_alert');
	}

}
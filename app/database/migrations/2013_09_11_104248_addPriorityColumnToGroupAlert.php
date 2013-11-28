<?php

use Illuminate\Database\Migrations\Migration;

class AddPriorityColumnToGroupAlert extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('group_alert', function($table)
		{
		    $table->integer('priority')->default('1');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('group_alert', function($table)
		{
		    $table->dropColumn('priority');
		});
	}

}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddColumnUserIdToPlayerProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('player_profile', function(Blueprint $table) {
			$table->integer('user_id')->after('id')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('player_profile', function(Blueprint $table) {
			$table->dropColumn('user_id');
		});
	}

}

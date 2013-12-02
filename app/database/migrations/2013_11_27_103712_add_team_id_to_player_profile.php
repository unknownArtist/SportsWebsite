<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTeamIdToPlayerProfile extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('player_profile', function(Blueprint $table) {
			$table->integer('team_id')->unsigned()->after('user_id');

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
			$table->dropColumn('team_id');
		});
	}

}

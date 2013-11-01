<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class ChangeNameOfProfilePhotoColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('player_profile_photos', function(Blueprint $table) {

			$table->renameColumn('player_profile_videos','player_profile_photo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('player_profile_photos', function(Blueprint $table) {

			$table->renameColumn('player_profile_photo','player_profile_videos');
		});
	}

}

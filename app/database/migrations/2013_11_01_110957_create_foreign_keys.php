<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('team_photos', function(Blueprint $table) {
			$table->foreign('team_id')->references('id')->on('teams')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('team_videos', function(Blueprint $table) {
			$table->foreign('team_id')->references('id')->on('teams')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('player_profile_photos', function(Blueprint $table) {
			$table->foreign('player_profile_id')->references('id')->on('player_profile')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('player_profile_videos', function(Blueprint $table) {
			$table->foreign('player_profile_id')->references('id')->on('teams')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('rink_images', function(Blueprint $table) {
			$table->foreign('rink_id')->references('id')->on('rinks')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('rink_addresses', function(Blueprint $table) {
			$table->foreign('rink_id')->references('id')->on('rinks')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('team_photos', function(Blueprint $table) {
			$table->dropForeign('team_photos_team_id_foreign');
		});
		Schema::table('team_videos', function(Blueprint $table) {
			$table->dropForeign('team_videos_team_id_foreign');
		});
		Schema::table('player_profile_photos', function(Blueprint $table) {
			$table->dropForeign('player_profile_photos_player_profile_id_foreign');
		});
		Schema::table('player_profile_videos', function(Blueprint $table) {
			$table->dropForeign('player_profile_videos_player_profile_id_foreign');
		});
		Schema::table('rink_images', function(Blueprint $table) {
			$table->dropForeign('rink_images_rink_id_foreign');
		});
		Schema::table('rink_addresses', function(Blueprint $table) {
			$table->dropForeign('rink_addresses_rink_id_foreign');
		});
	}
}
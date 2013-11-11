<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRinksTable extends Migration {

	public function up()
	{
		Schema::create('rinks', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('rink_layout_image', 300)->nullable();
			$table->integer('rink_seating_capacity');
			$table->integer('rink_change_rooms')->nullable();
			$table->integer('rink_boardType')->nullable();
			$table->string('rink_other', 255)->nullable();
			$table->string('rink_highlights')->nullable();
			$table->text('rink_history')->nullable();
			$table->date('rink_opened_date')->nullable();
			$table->date('rink_closed_date')->nullable();
			$table->string('rink_video', 300);
			$table->text('rink_description')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('rinks');
	}
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRinkAddressesTable extends Migration {

	public function up()
	{
		Schema::create('rink_addresses', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('rink_id')->unsigned();
			$table->string('rink_addresse', 300);
		});
	}

	public function down()
	{
		Schema::drop('rink_addresses');
	}
}
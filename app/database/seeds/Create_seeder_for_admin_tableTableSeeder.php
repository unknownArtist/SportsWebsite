<?php

class Create_seeder_for_admin_tableTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('create_seeder_for_admin_table')->truncate();

		$create_seeder_for_admin_table = array(
			'email' =>	'admin',
			'password' =>	Hash::make('admin')
		);
		// Uncomment the below to run the seeder
		DB::table('admin_login')->insert($create_seeder_for_admin_table);
	}

}

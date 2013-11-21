<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	
		$create_seeder_for_admin_table = array(
			'email' =>	'admin@admin.com',
			'password' =>	md5('admin')
		);
		// Uncomment the below to run the seeder
		DB::table('admin_login')->insert($create_seeder_for_admin_table);
  
		// $this->call('Create_seeder_for_admin_tableTableSeeder');
		$this->call('TeamsTableSeeder');
		$this->call('Add_register_userTableSeeder');
	}

}
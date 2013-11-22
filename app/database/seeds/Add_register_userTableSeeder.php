<?php

class Add_register_userTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('add_register_user')->truncate();

		$add_register_user = array(
			'first_name' => 'test',
			'last_name'  => 'test',
			'email'		 => 'test@test.com',
			'password'	 => sha1('test'),
			'activated_at'=> date('Y-m-d:H:i:s')
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($add_register_user);
	}

}

<?php

class UsersTableSeeder extends DatabaseSeeder {

	public function run()
	{
		$users = array(
                    array("username" => "admin", "password" => 'changeme'),
                    array("username" => "jae", "password" => 'asdf')
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}

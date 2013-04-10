<?php

class UsersTableSeeder extends DatabaseSeeder {

	public function run()
	{
		$users = array(
                    array("username" => "admin", "password" => '$2y$08$LWP9/EIaFkGtEjUOXsiMTu0ol87Vee7pogOBW.aaPhuOyRwhsJyRu')
		);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}

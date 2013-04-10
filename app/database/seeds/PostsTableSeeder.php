<?php

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$posts = array(
                    array('user_id'=>1, 'title'=>'first post', 'body'=>'lorem ipsum')
		);

		// Uncomment the below to run the seeder
		DB::table('posts')->insert($posts);
	}

}

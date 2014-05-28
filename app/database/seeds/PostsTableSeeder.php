<?php

class PostsTableSeeder extends Seeder 	{
	public function run()	{
		$content = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.';
		
		// $typeId = mt_rand(1,5);
		
		for($i = 1; $i<= 10; $i++)	{
			$post = new Post;
			$post->title = "Movie review $i";
			$post->content = $content;
			$post->type_id = mt_rand(1,5);
			$post->save();
		}
	}
	
}
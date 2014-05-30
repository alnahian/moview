<?php

class BlogController extends BaseController	{
	
	public function getIndex()	{
	$posts = Post::all();
	return View::make('posts.index')
		->with('posts', $posts);
	}
}
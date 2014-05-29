<?php

class BlogController extends BaseController	{
	
	public function getIndex()	{
		$posts = Post::orderBy('id', 'desc')->paginate(10);
	//	$this->layout->title = 'MOVIEW | Movie Review Blog';
		return View::make('post.index')
			->with('posts', $posts);
	}
}
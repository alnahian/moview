<?php
class PostController extends BaseController	{
	public function lisPost()	{
		$posts = Post::orderBy('id','desc')->paginate(10);
		$this->layout->title = 'Review listings';
	}
	
	public function showPost(Post $post)	{
		
	}
	
	public function newPost()	{
		$this->layout->title = 'Add a review';
		
	}
}
<?php
class PostController extends BaseController	{
	public function lisPost()	{
		$posts = Post::orderBy('id','desc')->paginate(10);
		$this->layout->title = 'Review listings';
		$this->layout->main = View::make('posts.list');
	}
	
	public function showPost(Post $post)	{
		$this->layout->title = $post->title;
		$this->layout->main = View::make('posts.single');
	}
	
	public function newPost()	{
		$this->layout->title = 'Add a review';
		$this->layout->main = View::make('posts.new');
	}
	
	public function editPost(Post $post)	{
		$this->layout->title = 'Edit Review';
		$this->layout->main = View::make('posts.edit');
	}
	
	public function deletePost(Post $post)	{
		$post->delete();
		return Redirect::route('post.list')->with('success', 'Post is deleted!');
}
}
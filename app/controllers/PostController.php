<?php
class PostController extends BaseController	{

	
	public function lisPost()	{
		$posts = Post::orderBy('id','desc')->paginate(10);
		$this->layout->title = 'Review listings';
		$this->layout->main = View::make('posts.list');
	}
	
	public function showPost(Post $post)	{
	return View::make('posts.single')
		->with('post', $post);
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
	
	public function showPostGenre($genre)	{
		$type = Type::whereGenre($genre)->with('posts')->first();
		return View::make('posts.index')
		->with('type', $type)
		->with('posts', $type->posts);
	}
}
<?php
class PostController extends BaseController	{

	public function listPost()	{
		$posts = Post::all();
	return View::make('posts.index')
		->with('posts', $posts);
	}
	
	public function showPost(Post $post)	{
	return View::make('posts.single')
		->with('post', $post);
	}
	
	public function newPost()	{
		$post = new Post;
		return View::make('posts.edit')
			->with('post', $post)
			->with('method', 'post');
	}
	
	public function savePost()	{
		$post = Post::create(Input::all());
		if($post->save())	{
			return Redirect::to('posts/'.$post->id)
				->with('message', 'Successfully created review!');
		}	else	{
			return Redirect::back()
				->with('error', 'Could not create review');
		}
	}
	
	public function editPost(Post $post)	{
		return View::make('posts.edit')
			->with('post', $post)
			->with('method', 'put');
	}
	
	public function updatePost(Post $post)	{
		$post->update(Input::all());
		return Redirect::to('posts/'.$post->id)
			->with('message', 'Successfully updated review!');
	}
	
	public function deletePost(Post $post)	{
		return View::make('posts.edit')
			->with('post', $post)
			->with('method', 'delete');
	}
	
	public function confirmDeletePost(Post $post)	{
		$post->delete();
		return Redirect::to('/')
			->with('message', 'Successfully deleted review!');
	}
	
	public function showPostGenre($genre)	{
		$type = Type::whereGenre($genre)->with('posts')->first();
		return View::make('posts.index')
		->with('type', $type)
		->with('posts', $type->posts);
	}
}
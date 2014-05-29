<?php
#### moview application ####

Route::model('post', 'Post');
Route::model('type', 'Type');

Route::get('/', function()
{
	return Redirect::to('posts');
});

Route::get('posts', function()	{
	$posts = Post::all();
	return View::make('posts.index')
		->with('posts', $posts);
});


Route::get('posts/create', function()	{
	$post = new Post;
	return View::make('posts.edit')
		->with('post', $post)
		->with('method', 'post');
});
	
Route::post('posts', function()	{
	$post = Post::create(Input::all());
	if($cat->save())	{
		return Redirect::to('posts/'.$post->id)
			->with('message', 'Successfully created review!');
	}	else	{
		return Redirect::back()
			->with('error', 'Could not create review');
	}
});
	
Route::get('posts/{post}/edit', function(Post $post)	{
	return View::make('posts.edit')
		->with('post', $post)
		->with('method', 'put');
});
	
Route::put('posts/{post}', function(Post $post)	{
			$post->update(Input::all());
			return Redirect::to('posts/'.$post->id)
				->with('message', 'Successfully updated review!');
});
	
Route::get('posts/{post}/delete', function(Post $post)	{
	return View::make('posts.edit')
		->with('post', $post)
		->with('method', 'delete');
});
	
Route::delete('posts/{post}', function(Post $post)	{
	$post->delete();
	return Redirect::to('posts')
		->with('message', 'Successfully deleted review!');
});

//////////////&&&&&&&&&&&&&&&&&&&&///////////
Route::get('posts/types/{genre}', function($genre)	{
	$type = Type::whereGenre($genre)->with('posts')->first();
	return View::make('posts.index')
		->with('type', $type)
		->with('posts', $type->posts);
});


Route::get('posts/{post}', function(Post $post)	{
	return View::make('posts.single')
		->with('post', $post);
});

View::composer('posts.edit', function($view)	{
	$types = Type::all();
	if(count($types) > 0)	{
		$type_options = array_combine($types->lists('id'), $types->lists('genre'));
	}	else	{
		$type_options= array(null, 'Unspecified');
	}
	$view->with('type_options', $type_options);
});


Route::get('types', function()	{
	$types = Type::all();
	return View::make('types.index')
		->with('types', $types);
});


Route::get('types/{type}', function(Type $type)	{
	return View::make('types.single')
		->with('type', $type);
});


#### moview application ####
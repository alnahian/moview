<?php
#### moview application ####

Route::model('post', 'Post');
Route::model('type', 'Type');


Route::get('/', 'BlogController@getIndex');

Route::get('about', 'BlogController@getAbout');

Route::get('posts', 'PostController@listPost');

Route::get('posts/create', 'PostController@newPost');
	
Route::post('posts', 'PostController@savePost');
	
Route::get('posts/{post}/edit', 'PostController@editPost');
	
Route::put('posts/{post}', 'PostController@updatePost');
	
Route::get('posts/{post}/delete', 'PostController@deletePost');
	
Route::delete('posts/{post}', 'PostController@confirmDeletePost');

Route::get('posts/types/{genre}', 'PostController@showPostGenre');

Route::get('posts/{post}', 'PostController@showPost');

Route::get('types', 'TypeController@listType');

Route::get('types/{type}', 'TypeController@showType');

View::composer('posts.edit', function($view)	{
	$types = Type::all();
	if(count($types) > 0)	{
		$type_options = array_combine($types->lists('id'), $types->lists('genre'));
	}	else	{
		$type_options= array(null, 'Unspecified');
	}
	$view->with('type_options', $type_options);
});

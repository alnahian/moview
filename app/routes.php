<?php
Route::model('post', 'Post');
Route::model('type', 'Type');

Route::get('/post/{post}/show', ['as'=>'post.show', 'uses'=>'PostController@showPost']);
Route::get('/type/{type}/show', ['as'=>'type.show', 'uses'=>'TypeController@showType']);

Route::post('/type/{type}/post', ['as'=>'post.new', 'uses'=>'PostController@newPost']);

Route::get('/post/list',['as'=>'post.list', 'uses'=>'PostController@listPost']);
Route::get('/post/new',['as'=>'post.new', 'uses'=>'PostController@newPost']);
Route::get('/post/{post}/edit', ['as'=>'post.edit', 'uses'=>'PostController@editPost']);
Route::get('/post/{post}/delete', ['as'=>'post.delete', 'uses'=>'PostController@deletePost']);
Route::get('/type/list', ['as'=>'type.list', 'uses'=>'TypeController@listType']);
Route::get('/type/new',['as'=>'type.new', 'uses'=>'TypeController@newType']);
Route::get('/type/{type}/edit', ['as'=>'type.edit', 'uses'=>'TypeController@editType']);
// Route::get('type/{type}/delete', ['as'=>'type.delete', 'uses'=>'TypeController@deleteType']);

Route::post('/post/save', ['as'=>'post.save', 'uses'=>'PostController@savePost']);
Route::post('/post/{post}/update', ['as'=>'post.update', 'uses'=>'PostController@updatePost']);
Route::post('/type/save', ['as'=>'type.save', 'uses'=>'TypeController@saveType']);
Route::post('/type/{type}/update', ['as'=>'type.update', 'uses'=>'TypeController@updateType']);

Route::controller('/', 'BlogController')

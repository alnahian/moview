@extends('master')

@section('header')
	<a href="{{url('/')}}">Back to overview</a>
	<h2>
		{{{$post->title}}}
	</h2>
	
	<a href="{{url('posts/'.$post->id.'/edit')}}">
		<span class="glyphicon glyphicon-edit"></span> Edit
	</a>
	<a href="{{url('posts/'.$post->id.'/delete')}}">
		<span class="glyphicon glyphicon-trash"></span> Delete
	</a>
	Post created: {{$post->created_at}}
	Last edited: {{$post->updated_at}}
@stop

@section('content')
	<p>Review: {{$post->content}}</p>
	<p>
		@if($post->type)
			Type:
			{{link_to('posts/types/'.$post->type->genre, $post->type->genre)}}
		@endif
	</p>
@stop
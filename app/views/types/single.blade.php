@extends('master')

@section('header')
	<a href="{{url('/')}}">Back to overview</a>
	<h2>
		{{{$type->genre}}}
	</h2>
	
	<a href="{{url('type/'.$type->id.'/edit')}}">
		<span class="glyphicon glyphicon-edit"></span> Edit
	</a>
	<a href="{{url('type/'.$type->id.'/delete')}}">
		<span class="glyphicon glyphicon-trash"></span> Delete
	</a>
@stop

@section('content')
	<p><div class="text">Description: {{$type->description}}</div></p>
	<p>
		Reviews in this genre:
		
		@foreach($type->posts as $post)	
			<div class="post">
				<a href="{{url('posts/'.$post->id)}}">
					<strong> {{{$post->title}}} </strong>
				</a>
			</div>
		@endforeach
	</p>
@stop
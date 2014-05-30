@extends('master')

@section('header')
	<a href="{{URL::previous()}}">&larr; Cancel</a>
	<h2>
		@if($method == 'post')
			Add a new review
		@elseif($method == 'delete')
			Delete {{$post->name}} ?
		@else
			Edit {{$post->name}}
		@endif
	</h2>
@stop

@section('content')
	{{Form::model($post, array('method' => $method, 'url' => 'posts/'.$post->id))}}
	
	@unless($method == 'delete')

		<div class="form-group">
			{{Form::label('Title')}}
			{{Form::text('title')}}
		</div>
		<div class = "form-group">
			{{Form::label('Content')}}
			{{Form::textarea('content')}}
		</div>
		<div class="form-group">
			{{Form::label('Select Genre')}}
			{{Form::select('type_id', $type_options)}}
		</div>
	
		{{Form::submit("Save", array("class"=>"btn btn-default"))}}
	@else
		{{Form::submit("Delete", array("class"=>"btn btn-default"))}}
	@endif

	{{Form::close()}}
@stop
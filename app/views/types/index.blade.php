@extends('master')

@section('header')
		{{link_to('/', 'Back to the overview')}}

<h2>
	All Genres
	<a href="{{url('posts/create')}}" class="btn btn-primary pull-right">
		Add a new post
	</a>
</h2>
@stop

@section('content')
  @foreach($types as $type)
    <div class="type">
      <a href="{{url('types/'.$type->id)}}">
        <strong> {{{$type->genre}}} </strong>
      </a>
    </div>
  @endforeach
@stop
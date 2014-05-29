@extends('master')

@section('header')
	@if(isset($type))
		{{link_to('/', 'Back to the overview')}}
	@endif
<h2>
	All @if(isset($type))	{{$type->genre}}	@endif Reviews
	<a href="{{url('posts/create')}}" class="btn btn-primary pull-right">
		Add a new post
	</a>
</h2>
@stop

@section('content')
  @foreach($posts as $post)
    <div class="post">
      <a href="{{url('posts/'.$post->id)}}">
        <strong> {{{$post->title}}} </strong> - {{{$post->type->genre}}}
      </a>
    </div>
  @endforeach
@stop
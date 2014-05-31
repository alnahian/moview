<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
	<script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
	<title>MovieW</title>
  </head>
  <body>
    <div class="container">
      <div class="page-header">
			<div class="text-right">
			@if(Auth::check())
				Logged in as
				<strong>{{{Auth::user()->username}}}</strong>
				{{link_to('logout', 'Log Out')}}
			@else
				{{link_to('login', 'Log In')}}
			@endif
			</div>
        @yield('header')
      </div>
	  @if(Session::has('message'))
        <div class="alert alert-success">
          {{Session::get('message')}}
        </div>
	  @endif
	  
	  @if(Session::has('error'))
		<div class="alert alert-warning">
			{{Session::get('error')}}
		</div>
	  @endif
	  @yield('content')
    </div>
  </body>
</html>
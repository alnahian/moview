<!DOCTYPE html>
<html class="full" lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
	<script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{asset('js/blur.js')}}"></script>
	<script src="{{asset('js/jquery.foggy.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
	<title>MovieW</title>
  </head>
  <body>
	<div class="container">
	    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}">MOVIEW</a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('posts')}}"><i class="fa fa-file-text fa-lg"> Post</i></a>
                    </li>
                    <li><a href="{{url('types')}}"><i class="fa fa-camera-retro fa-lg"> Genre</i></a>
                    </li>
                    <li><a href="{{url('about')}}"><i class="fa fa-shield fa-lg"> About</i></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
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
<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700,900" />
	<!-- slideshow bootsrap -->
  	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  	<!-- end slideshow -->
</head>
<body>
	
	@include('layouts.sidebar')

	<div id="wrapper">

		@include('layouts.header')

		<div class="container">
			@if (Auth::check())
				<div>
					'{{Auth::user()->name}}' đang đăng nhập với quyền 
					@if( Auth::user()->role_id == 1)
						{{ "SuperAdmin" }}
					@elseif( Auth::user()->role_id == 2)
						{{ "Admin" }}
					@elseif( Auth::user()->role_id == 3)
						{{ "Member" }}
					@endif
				</div>
				<a class="btn btn-primary" href="{{ url('/logout') }}">LOG OUT</a>
			@endif
		</div>
		
		@yield('content')

		@include('layouts.footer')

		@yield('script')	
	</div>
</body>
<script type="text/javascript" src="{{asset('js/slide.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>
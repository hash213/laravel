<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GM Financenter</title>
	{{ HTML::style('dist/css/bootstrap.min.css') }}
   	{{ HTML::style('dist/css/main.css')}}
   	{{ HTML::style('dist/fonts/glyphicons-halflings-regular.ttf')}}
   	{{ HTML::style('dist/css/datepicker.css')}}
</head>
<body>
	
	@yield('header')
	
	<div id="main" class="container">
	@yield('content')
	</div>

	<div>
		@yield('carousel')
	</div>

	<div>
		@yield('footer')
	</div>

	{{HTML::script('assets/js/jquery.js')}}
    {{HTML::script('dist/js/bootstrap.min.js')}}
    <!-- {{ HTML::script('js/script.js') }} -->
   <!--  {{ HTML::script('public/assets/test/js/jquery.js') }} -->

</body>
</html>
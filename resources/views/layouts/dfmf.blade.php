<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheets/dashboard/app.css') }}">
    <link rel="stylesheet" href="{{ asset('components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.css') }}"></link>
</head>
<body>
	<div class="col-md-2"></div>
	<div class="col-md-7">
		<a href="{{ '/posts' }}" class="btn-back">Regresar</a>

		@yield('content')
	</div>
	<div class="col-md-3">
		@yield('tags')
	</div>

	<script src="{{ asset('components/wysihtml5x/dist/wysihtml5x-toolbar.min.js') }}"></script>
	<script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('components/handlebars/handlebars.runtime.min.js') }}"></script>
	<script src="{{ asset('components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.min.js') }}"></script>
	<script>
		$('.textarea').wysihtml5();
	</script>
</body>
</html>
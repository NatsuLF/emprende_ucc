<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="stylesheets/dashboard/app.css">
</head>
<body>
	@include('shared.navbar-dash')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				@include('shared.sidebar')
			</div>
			<div class="col-md-8">
				@yield('content')
			</div>
			<div class="col-md-2">
				<a href="{{ 'tags/create' }}" class="btn btn-primary btn-block">Crear</a>
			</div>
		</div>
	</div>
	<script src="components/jquery/dist/jquery.min.js"></script>
	<script src="components/bootstrap/js/dropdown.js"></script>
</body>
</html>
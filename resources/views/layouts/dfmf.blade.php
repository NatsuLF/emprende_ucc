<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="components/font-awesome/css/font-awesome.min.css">
</head>
<body>
	<div class="col-md-3"></div>
	<div class="col-md-5">
		@yield('container')
	</div>
	<div class="col-md-1">
		<!-- here need to go tags maybe from parcials -->
	</div>
	<div class="col-md-3"></div>
</body>
</html>
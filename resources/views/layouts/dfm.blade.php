<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('stylesheets/dashboard/app.css') }}">
</head>
<body>
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <a href="{{ '/tags' }}" class="btn-back">Regresar</a>

        @yield('content')
    </div>
    <div class="col-md-3"></div>
</body>
</html>
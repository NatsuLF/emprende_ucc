<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('stylesheets/dashboard/app.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheets/simple-sidebar.css') }}">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @include('shared.sidebar')
            </div>
            <div class="col-md-10">
            <br><br>
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
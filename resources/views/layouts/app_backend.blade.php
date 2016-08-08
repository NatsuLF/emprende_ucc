<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheets/dashboard/app.css">
    <link rel="stylesheet" href="stylesheets/simple-sidebar.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                @include('shared.sidebar')
            </div>
            <div class="col-md-10">
                <br>
                <a href="{{ Request::url() . '/create' }}" class="btn btn-primary pull-right"><i class="fa fa-plus-circle fa-fw" aria-hidden="true"></i>&nbsp; Crear</a>
                <br><br>
                @yield('content')
            </div>
        </div>
    </div>
    <script src="components/jquery/dist/jquery.min.js"></script>
    <script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>
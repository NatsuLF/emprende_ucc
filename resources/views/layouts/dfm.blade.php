<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ URL::asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('stylesheets/dashboard/app.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheets/simple-sidebar.css') }}">
</head>

<body>
    <div id="wrapper">
        <div class="container" id="page-content-wrapper">
            <div class="row">
                @include('shared.sidebar')

                <div class="col-md-12">
                    <a href="#menu-toggle" class="btn" id="menu-toggle">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </a>

                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $("i", this).toggleClass("fa-chevron-left fa-chevron-right");
    });
    </script>

</body>
</html>
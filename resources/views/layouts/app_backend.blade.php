<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/simple-sidebar.css">
</head>

<body>
    <div id="wrapper">
        <div class="container" id="page-content-wrapper">
            <div class="row">
                @include('shared.sidebar')

                <div class="col-md-12">
                    <div style="padding: 20px 0 20px 0;">
                        <a href="#menu-toggle" class="btn" id="menu-toggle">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </a>
                        <a href="{{ Request::url() . '/create' }}" class="btn btn-primary pull-right">
                            <i class="fa fa-plus-circle fa-fw" aria-hidden="true"></i> Crear
                        </a>
                    </div>

                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="components/jquery/dist/jquery.min.js"></script>
    <script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();

            $("#wrapper").toggleClass("toggled");
            $("i", this).toggleClass("fa-chevron-left fa-chevron-right");
        });
    </script>
</body>
</html>

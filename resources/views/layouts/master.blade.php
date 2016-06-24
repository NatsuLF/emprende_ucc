<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Proyecto Apicola - @yield('title')</title>
        <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="stylesheets/navbar.css">
        <link rel="stylesheet" href="stylesheets/styles.css">
    </head>
    <body>
        @include('shared.navbar')
        @include('shared.social')
            <div class="container">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        <script src="components/jquery/dist/jquery.min.js"></script>
        <script src="components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="js/links.js"></script>
        <script src="js/textarea.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Proyecto Apicola - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('stylesheets/navbar.css') }}">
        <link rel="stylesheet" href="{{ asset('stylesheets/styles.css') }}">
    </head>
    <body>
        @include('shared.navbar')

        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>

        <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/links.js') }}"></script>
        <script src="{{ asset('js/textarea.js') }}"></script>
        <script>
            document.getElementById('shareBtn').onclick = function() {
              FB.ui({
                method: 'share',
                mobile_iframe: true,
                href: 'https://developers.facebook.com/docs/',
              }, function(response){});
            }
        </script>

        @yield('javascripts')
    </body>
</html>
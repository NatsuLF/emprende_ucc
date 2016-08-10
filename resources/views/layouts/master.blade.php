<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://shema.org/Blog">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

{{--         <meta itemprop="name" content="Blog de Proyecto Apicoal - UCC">
        <meta itemprop="description" content="Blog informativo del Proyecto apicola - UCC">
        <meta itemprop="image" content="https://dl.dropboxusercontent.com/s/qodhyrzlqiimghi/Logo.png?dl=0"> --}}

        {{-- <meta property="og:url"           content="http://www.localhost:8000/blog/" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Proyecto Apicola - UCC" />
        <meta property="og:description"   content="Diseño de colmenas modelo Vincent" />
        <meta property="og:image"         content="https://dl.dropboxusercontent.com/s/qodhyrzlqiimghi/Logo.png?dl=0" /> --}}

        <title>Programa de emprendedurismo - @yield('title')</title>

        <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('stylesheets/jumbotron-narrow.css') }}">
        <link rel="stylesheet" href="{{ asset('stylesheets/styles.css') }}">

    </head>
    <body>
        <img src="https://dl.dropboxusercontent.com/s/r9sv7btjmznuh07/LOGO%20UCC-80px.png?dl=0" class="img-responsive pull-left" id="logo-ucc" alt="Responsive image">
        <div class="container">
            @include('shared.navbar')
            <div class="row marketing">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>

            <footer class="footer">
                <p>&copy; 2016 PEIDE, UCC-León, Nicaragua</p>
            </footer>
        </div>

        <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/textarea.js') }}"></script>

        @yield('javascripts')
    </body>
</html>

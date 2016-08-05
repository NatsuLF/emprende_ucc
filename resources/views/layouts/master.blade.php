<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://shema.org/Blog">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta itemprop="name" content="Blog de Proyecto Apicoal - UCC">
        <meta itemprop="description" content="Blog informativo del Proyecto apicola - UCC">
        <meta itemprop="image" content="https://dl.dropboxusercontent.com/s/qodhyrzlqiimghi/Logo.png?dl=0">

        <meta property="og:url"           content="http://www.localhost:8000/blog/" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Proyecto Apicola - UCC" />
        <meta property="og:description"   content="Diseño de colmenas modelo Vincent" />
        <meta property="og:image"         content="https://dl.dropboxusercontent.com/s/qodhyrzlqiimghi/Logo.png?dl=0" />

        <title>Proyecto Apicola - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('stylesheets/styles.css') }}">
    </head>
    <body>
        @include('shared.navbar')

        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>

        <div>
            @yield('footer')
        </div>

        <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/textarea.js') }}"></script>

        @yield('javascripts')
    </body>
</html>

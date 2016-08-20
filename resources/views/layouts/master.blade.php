<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://shema.org/Blog">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <meta itemprop="name" content="Noticias PEIDE - UCC">
        <meta itemprop="description" content="Programa de Emprendedurismo, Innovación y Desarrollo Empresarial - UCC">
        <meta itemprop="image" content="https://dl.dropboxusercontent.com/s/tu8lhv6i3umocjv/logo-PEIDE.png?dl=0">

        <meta property="og:url"           content="{{ Request::url() }}" />
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="Noticias PEIDE - UCC" />
        <meta property="og:description"   content="Programa de Emprendedurismo, Innovación y Desarrollo Empresarial - UCC" />
        <meta property="og:image"         content="https://dl.dropboxusercontent.com/s/tu8lhv6i3umocjv/logo-PEIDE.png?dl=0" />

        <title>Programa de emprendedurismo - @yield('title')</title>

        <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('stylesheets/jumbotron-narrow.css') }}">
        <link rel="stylesheet" href="{{ asset('stylesheets/styles.css') }}">

    </head>
    <body>
        <div class="banner1">
            <div class="box box1"></div>
            <div class="box box2"></div>
            <div class="box box3"></div>
            <div class="box box4"></div>
            <div class="box box5"></div>
            <div class="box box6"></div>
            <div class="box box7"></div>
            <div class="box box8"></div>
            <div class="box box9"></div>
            <div class="box box10"></div>
        </div>

        <div class="logos">
            <a href="{{ url('/') }}" class="navbar-left">
                <img src="https://dl.dropboxusercontent.com/s/r93htr4lhjti3tf/LOGO%20UCC%20OFICIAL-50px.png?dl=0" class="img-responsive" id="logo-ucc" alt="Responsive image">
                <img src="https://dl.dropboxusercontent.com/s/sw087a1fj3xtp6u/logo-PEIDE-70px.png?dl=0" class="img-responsive" id="logo-peide" alt="Responsive image">
            </a>
        </div>
        <div class="container">
            @include('shared.navbar')
            <div class="row marketing">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>

            <footer class="footer">
                <p>&copy; 2016 Programa de Emprendedurismo, Innovación y Desarrollo Empresarial (PEIDE). UCC-León, Nicaragua</p>
            </footer>
        </div>

        <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/textarea.js') }}"></script>
        <script type="text/javascript">
          $('#bs-example-navbar-collapse-1').on('show.bs.collapse', function() {
              $('.nav-pills').addClass('nav-stacked');
          });

          $('#bs-example-navbar-collapse-1').on('hide.bs.collapse', function() {
              $('.nav-pills').removeClass('nav-stacked');
          });
        </script>

        @yield('javascripts')
    </body>
</html>

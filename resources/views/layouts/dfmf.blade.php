<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheets/dashboard/app.css') }}">
    <link rel="stylesheet" href="{{ asset('components/summernote/dist/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheets/simple-sidebar.css') }}">
</head>

<body>
    <div id="wrapper">
        <div class="container" id="page-content-wrapper">
            <div class="row">
                @include('shared.sidebar')

                <div class="col-md-10">
                    <a href="#menu-toggle" class="btn" id="menu-toggle">
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </a>
                    @yield('content')
                </div>
                <div class="col-md-2">
                    @yield('tags')
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/summernote/dist/summernote.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/summernote/lang/summernote-es-ES.js') }}"></script>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $("i", this).toggleClass("fa-chevron-left fa-chevron-right");
    });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#summernote').summernote({
              height: 400,
              minHeight: null,
              maxHeight: null,
              lang: 'es-ES',
          });
        if ($('#summernote').summernote('isEmpty')) {
          alert('contents is empty');
        }
        });
    </script>

    <script>
        $("#estado").change(function() {
            if($(this).is(':checked')) {
                $("#borrador").html("Publicar");
            } else {
                $("#borrador").html("Guardar como borrador");
            }
        });
    </script>
</body>
</html>
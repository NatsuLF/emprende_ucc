<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheets/dashboard/app.css') }}">
    <link rel="stylesheet" href="{{ asset('components/summernote/dist/summernote.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheets/simple-sidebar.css') }}">
</head>
<body>
    <div class="col-md-2">
        @include('shared.sidebar')
    </div>
    <div class="col-md-8">
    <br><br>
        @yield('content')
    </div>
    <div class="col-md-2">
        @yield('tags')
    </div>

    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/summernote/dist/summernote.js') }}"></script>
    <script type="text/javascript" src="{{ asset('components/summernote/lang/summernote-es-ES.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
          $('#summernote').summernote({
              height: 400,                 // set editor height
              minHeight: null,             // set minimum height of editor
              maxHeight: null,             // set maximum height of editor
              lang: 'es-ES', // default: 'es-ES'
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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('stylesheets/dashboard/app.css') }}">
</head>
<body>
    <div class="col-md-2"></div>
    <div class="container col-md-7">
        <a href="{{ '/items' }}" class="btn-back btn btn-primary">
            <i class="fa fa-arrow-left fa-fw" aria-hidden="true"></i>&nbsp; Regresar</a>
            @yield('content')
    </div>
    <div class="col-md-3"></div>

    <script src="{{ asset('components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script>
        $(function() {
            $('#cloneImageTextBox').on('click', function(e) {
                e.preventDefault();

                $('.images').first().clone().appendTo('#album');
            })
        });
    </script>
    <script>
            $(document).on('click', '.delete', function(e) {
                e.preventDefault();

                var images = $('.images').length;

                if (images > 1){
                    $(this).parent().parent().remove();
                }
            });
    </script>
</body>
</html>
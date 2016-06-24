<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Proyecto Apicola - @yield('title')</title>
        <link rel="stylesheet" href="components/bootstrap/dist/css/bootstrap.min.css">
        <style>
            body {
                padding-top: 75px;
                background-color: #B2EF86;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </body>
</html>
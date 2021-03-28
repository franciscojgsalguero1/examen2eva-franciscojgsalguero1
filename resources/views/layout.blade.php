<!DOCTYPE html>
<html>
    <head>
        <title> @yield('title', 'Titulo por defecto') </title>
        <style>
            a {
                text-decoration: none;
            }
            .active a {
                color: red;
            }
        </style>
    </head>
    <body>
        @include('partials.nav')
        @yield('content')
    </body>
</html>
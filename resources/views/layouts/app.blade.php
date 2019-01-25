<html>
    <head>
        <title>App Name - @yield('title')</title>
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">



        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
         <script  src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.js">

         </script>




    </head>
    <body>
        <div class="header">
            @yield('header')
        </div>
            @yield('slider')

            @yield('content')



    </body>
</html>



















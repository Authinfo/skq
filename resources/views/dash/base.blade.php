<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>{{ config('app.name', 'Medic-a Clinik') }}</title>

        <!-- Favicon -->
        <link href="{{URL::to('assets/dashboard/img/brand/favicon.png')}}" rel="icon" type="image/png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <!-- Icons -->
        <link href="{{URL::to('assets/dashboard/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
        <link href="{{URL::to('assets/dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

        <!-- Argon CSS -->
        <link type="text/css" href="{{URL::to('assets/dashboard/css/argon.min.css')}}" rel="stylesheet">
    </head>

    <body>`
        @yield('body')

        <!-- Core -->
        <script src="{{URL::to('assets/dashboard/vendor/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{URL::to('assets/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Argon JS -->
        <script src="{{URL::to('assets/dashboard/js/argon.min.js')}}"></script>
    </body>
</html>
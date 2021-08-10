<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Favicon -->
        <link rel="icon" href="#" type="image/png">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

        <!-- Icon -->
        <link rel="stylesheet" href="{{URL::to('assets/dashboard/vendor/nucleo/css/nucleo.css')}}" type="text/css">
        <link rel="stylesheet" href="{{URL::to('assets/dashboard/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{URL::to('assets/dashboard/css/argon.css')}}" type="text/css">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
        <script src="{{URL::to('assets/dashboard/vendor/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{URL::to('assets/dashboard/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::to('assets/dashboard/vendor/js-cookie/js.cookie.js')}}"></script>
        <script src="{{URL::to('assets/dashboard/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
        <script src="{{URL::to('assets/dashboard/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
        <!-- Optional JS -->
        <script src="{{URL::to('assets/dashboard/vendor/chart.js/dist/Chart.min.js')}}"></script>
        <script src="{{URL::to('assets/dashboard/vendor/chart.js/dist/Chart.extension.js')}}"></script>
        <!-- Argon JS -->
        <script src="{{URL::to('assets/dashboard/js/argon.js?v=1.1.0')}}"></script>
        <!-- Demo JS - remove this in your project -->
        <script src="{{URL::to('assets/dashboard/js/demo.min.js')}}"></script>
        @livewireScripts
    </body>
</html>

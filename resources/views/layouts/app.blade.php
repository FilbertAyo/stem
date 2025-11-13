<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Adilisha STEM Lab') }}</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('client/assets/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('client/assets/vendors/iconly/bold.css') }}">
        <link rel="stylesheet" href="{{ asset('client/assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('client/vendors/bootstrap-icons/bootstrap-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('client/assets/css/app.css') }}">
        <link rel="shortcut icon" href="{{ asset('client/assets/images/favicon.svg') }}" type="image/x-icon">

        @stack('styles')
    </head>
    <body>
        <div id="app">
            @include('layouts.aside')

            <div id="main">
                @include('layouts.navigation')

                {{ $slot }}
            </div>
        </div>

        <script src="{{ asset('client/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('client/assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('client/assets/vendors/apexcharts/apexcharts.js') }}"></script>
        <script src="{{ asset('client/assets/js/pages/dashboard.js') }}"></script>
        <script src="{{ asset('client/assets/js/main.js') }}"></script>
        @stack('scripts')
    </body>
</html>

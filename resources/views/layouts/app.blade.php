<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="{{ asset("assets/images/favicon.ico") }}">
    <link rel="icon" href="{{ asset("assets/images/favicon.ico") }}" type="image/x-icon">
    <link rel="icon" href="{{ asset("assets/images/favicon.ico") }}" type="image/x-icon">
    <meta name="theme-color" content="#e87316">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Surfside Media">
    <meta name="msapplication-TileImage" content="{{ asset("assets/images/favicon.ico") }}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Surfside Media">
    <meta name="keywords" content="Surfside Media">
    <meta name="author" content="Surfside Media">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/vendors/ion.rangeSlider.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/font-awesome.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/feather-icon.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/animate.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/slick/slick.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/vendors/slick/slick-theme.css") }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset("assets/css/demo4.css") }}">
    <style>
        .h-logo {
            max-width: 185px !important;
        }

        .f-logo {
            max-width: 220px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset("assets/css/custom.css") }}">
    @stack("styles")

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    @include("layouts.header")
    @yield('content')
    @include("layouts.footer")

    <script src="{{ asset("assets/js/jquery-3.5.1.min.js") }}"></script>
    <script src="{{ asset("assets/js/bootstrap/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("assets/js/feather/feather.min.js") }}"></script>
    <script src="{{ asset("assets/js/lazysizes.min.js") }}"></script>
    <script src="{{ asset("assets/js/slick/slick.js") }}"></script>
    <script src="{{ asset("assets/js/slick/slick-animation.min.js") }}"></script>
    <script src="{{ asset("assets/js/slick/custom_slick.js") }}"></script>
    <script src="{{ asset("assets/js/price-filter.js") }}"></script>
    <script src="{{ asset("assets/js/ion.rangeSlider.min.js") }}"></script>
    <script src="{{ asset("assets/js/filter.js") }}"></script>
    <script src="{{ asset("assets/js/newsletter.js") }}"></script>
    <script src="{{ asset("assets/js/cart_modal_resize.js") }}"></script>
    <script src="{{ asset("assets/js/bootstrap/bootstrap-notify.min.js") }}"></script>
    <script src="{{ asset("assets/js/theme-setting.js") }}"></script>
    <script src="{{ asset("assets/js/script.js") }}"></script>
    @stack("scripts")
</body>
</html>

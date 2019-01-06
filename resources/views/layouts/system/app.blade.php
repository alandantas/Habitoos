<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link href="{{asset('assets/backend/img/brand/favicon.png')}}" rel="icon" type="image/png">

    <!-- Icons -->
    <link href="{{asset('assets/backend/vendor/nucleo/css/nucleo.css')}}" rel="stylesheet">
    <link href="{{asset('assets/backend/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Argon CSS -->
    <link type="text/css" href="{{asset('assets/backend/css/argon.css?v=1.0.0')}}" rel="stylesheet">

    @stack('css')
</head>
<body>
<!-- Sidenav -->
@include('layouts.system.partial.sidenav')
<!-- Main content -->
    <div class="main-content">
<!-- Top navbar -->
    @include('layouts.system.partial.topbar')
<!-- Page content -->
    @yield('content')
    <!-- ('layouts.system.partial.footer') -->

    </div>
</div>




<!-- Argon Scripts -->
<!-- Core -->
<script src="{{asset('assets/backend/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/backend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- Optional JS -->
<script src="{{asset('assets/backend/vendor/chart.js/dist/Chart.min.js')}}"></script>
<script src="{{asset('assets/backend/vendor/chart.js/dist/Chart.extension.js')}}"></script>
<!-- Argon JS -->
<script src="{{asset('assets/backend/js/argon.js?v=1.0.0')}}"></script>


@stack('js')

</body>
</html>

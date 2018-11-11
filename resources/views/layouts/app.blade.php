<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KPC - @yield('title') </title>

    <!-- Styles -->
    @yield('header')
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/vendor.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <link rel="stylesheet" id="loadBefore" href="{{ URL::asset('css/style.css') }}">

</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<script src="{{ URL::asset('js/app.js') }}" type="text/javascript"></script>

@section('scripts')
@show

</body>
</html>

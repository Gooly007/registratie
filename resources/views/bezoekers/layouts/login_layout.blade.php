<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KPC {{ __('Registration') }} - @yield('title') </title>


    <link rel="stylesheet" href="{{ URL::asset('css/vendor.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />

</head>
<body>

    <!-- Authentication links -->
    @guest
  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('bezoekers.layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

    @else

    @endguest

<script src="{{ URL::asset('js/app.js') }}" type="text/javascript"></script>

@section('scripts')
@show

</body>
</html>

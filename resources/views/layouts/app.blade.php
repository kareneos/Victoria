<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Red social Victoria">
    <meta name="keywords" content="Red social, Victoria 147">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Victoria</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">

</head>
<body>
    
        @include('includes.navigation')
        
        @yield('content')
    

    <!-- Scripts -->
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/popper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/fontawesome.min.js')}}"></script>
    <script src="{{asset('/js/aos.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    @yield('js')
</body>
</html>

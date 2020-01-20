<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MarsNutri - @yield('title')</title>    
    <link href="{{ asset('css/auth/auth.css') }}" rel="stylesheet">
</head>
<body class="text-center">
    @yield('content')
    <script src="{{ asset('js/app.js')}}"></script>
    <script src="{{ asset('js/mdb.js')}}"></script>
    <script src="{{ asset('js/auth.js')}}"></script>
</body>
</html>

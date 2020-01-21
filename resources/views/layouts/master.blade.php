<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ url('img/tccLogoNoBg.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">   
    <link rel="stylesheet" href="{{ mix('css/dashboard/dashboard.css') }}">       
    <title>MarsNutri - @yield('title')</title>   
</head>
<body>
    <div class="wrapper">
        @include('components.sidebar')
        <div class="main-panel" id="main-panel">        
            @include('components.navbar')
            
            <div class="panel-header panel-header-sm">  
            </div>
            
            <div class="content">
                @yield('content')            
            </div> 
            
            @include('components.footer')
        </div>
    </div>  

    <script src="{{ mix('js/app.js') }}"></script>        
    <script src="{{ mix('js/dashboard/dashboard.js') }}"></script> 
    <script>
        feather.replace({
            "stroke-width": 3                       
        });
    </script>                
</body>
</html>
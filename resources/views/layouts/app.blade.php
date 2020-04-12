<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

   <!-- Scripts -->
   
   <script src="{{ asset('js/main.js') }}" defer></script>
   <script src="{{ asset('js/main-app.js') }}" defer></script>
   <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('vendor/fontawesome/css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('main.css') }}" rel="stylesheet">
    <link href="{{ asset('main.min.css') }}" rel="stylesheet">
    
    @yield('css')
</head>
<body>
    @auth
    <div id="app-container" class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header fixed-footer">
        
        @include('partials.header')  
        @include('partials.setting')
        
        <div class="app-main">
     
            @include('partials.sidebar')  
      
            <div class="app-main__outer">
                @yield('content') 
                @include('partials.footer')   
           
            </div>
            
        </div>
    </div>
    @endauth  
    @guest
       @yield('content')
    @endguest
    
     <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    @yield('script')
</body>
</html>

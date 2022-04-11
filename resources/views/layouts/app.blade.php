<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .button {
                    background:transparent;
                    color: #fff;
                    padding-right:20px;
                    padding-left: 10px;
                    text-align: center;
                    text-decoration: none;
                    font-family: cursive;
                    display: inline-block;
                    margin: 4px 2px;
                    cursor: pointer;
                    border-radius: 20px;
                   

            }
            .button:hover, .buttonn:active {
            text-decoration: none;
            transform: scale(1.4,1.4);
            color: #27ffff;
            }
            
            .navbar-brand:hover {
                opacity: 1 ;
                transform: scale(1.4,1.4);
            
                }
            
    </style>
</head>
<body>
    <div id="app">
        @include('partials.nav')
        <main class="py-4 mt-5">
            @include('flash::message')
            @yield('content')
        </main>
    </div>
</body>
</html>

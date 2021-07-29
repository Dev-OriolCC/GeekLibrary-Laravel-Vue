<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Icon -->
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Book_icon_%28closed%29_-_Blue_and_gold.svg/1200px-Book_icon_%28closed%29_-_Blue_and_gold.svg.png" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
        <!-- <v-app app id="app"> -->

            <main class="">
                @yield('content')
            </main>
            
        <!-- </v-app id="app"> -->
    </div>
        <script src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>

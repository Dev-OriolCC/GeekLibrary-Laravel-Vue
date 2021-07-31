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
            <nav class="navbar navbar-expand-lg pt-2 navbar-light col-12" style="background-color: #3F51B5; ">
                <router-link to="/">
                    <a class="navbar-brand text-white ml-3 mt-2" href="#"><h3>Geek Library</h3></a>
                </router-link>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <router-link to="/">
                                <a class="nav-link text-white h5 mt-2" href="#">Home <span class="sr-only">(current)</span></a>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/About">
                                <a class="nav-link text-white h5 mt-2" href="#">About</a>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/Contact">
                                <a class="nav-link text-white h5 mt-2" href="#">Contact</a>
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white h5 mt-2" href="#">Extra</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 mr-5 my-lg-0">
                        <input class="form-control ml-4 mr-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success ml-4 my-2 my-sm-0 " type="submit">Search</button>
                    </form>
                    <div class="col-12 col-sm-2 d-flex">
                        @auth
                            <router-link to="/Admin" class="mx-3"><a href="" class="btn btn-success">Admin</a></router-link>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="text-white btn btn-info">Logout</button>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-white h5">Login</a>
                            <a href="{{ route('register') }}" class="text-white ml-2 h5">Register</a>
                        @endauth
                    </div>
                </div>
            </nav>


        <main class="">
            @yield('content')
        </main>

        
            
        <!-- </v-app id="app"> -->
    </div>
        <script src="{{ asset(mix('js/app.js')) }}"></script>
</body>
</html>

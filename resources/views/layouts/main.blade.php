<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="bg-main">
    <div id="app">

        @guest
        <nav class="navbar navbar-custom navbar-expand-lg navbar-dark bg-dark" style="color: white">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-white mr-auto ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Category
                        </a>
                        <div class="dropdown-menu" >
                        <a class="dropdown-item" href="/category/2">Beach</a>
                        <a class="dropdown-item" href="/category/3">Culinary</a>
                        <a class="dropdown-item" href="/category/1">Mountain</a>
                        </div>
                      </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                    </li>
           
                    <li class="nav-item">
                    <a class="nav-link" href="/register">Register</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/login">Login</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        @endguest

        @auth
        @if(Auth::user()->role==1)
        <nav class="navbar navbar-custom navbar-expand-lg navbar-dark bg-dark" style="color: white">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-white mr-auto ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/myblog">Blog</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>
                </div>
            </div>
        </nav>
        @elseif(Auth::user()->role==2)
        <nav class="navbar navbar-custom navbar-expand-lg navbar-dark bg-dark" style="color: white">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-white mr-auto ml-auto">
                    <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                     <a class="nav-link" href="/blog">Blog List</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/user">User List</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>
                </div>
            </div>
        </nav>
        @endif
        @endauth

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            @if (Route::has('login'))
                <div class="flex justify-between items-center p-5 bg-noir text-white">
                    <div>
                        <img src="{{url('/img/logo.png')}}" class="absolute w-16 -mt-8" alt="#">
                    </div>
                    <div class="">
                        <ul class="flex ml-44">
                            <li class="px-5"><a href="{{ url('/') }}" class="uppercase ml-10 tracking-widest hover:border-b-2 border-white transition-all ease-in-out duration-75">Accueil</a></li>
                            <li class="px-5"><a href="{{ route('articles.index') }}" class="uppercase tracking-widest hover:border-b-2 border-white transition-all ease-in-out duration-75">Produits</a></li>
                            <li class="px-5"><a href="{{ url('contact') }}" class="uppercase tracking-widest hover:border-b-2 border-white transition-all ease-in-out duration-75">Contact</a></li>
                        </ul>
                    </div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="uppercase tracking-widest">Mon Profil</a>
                    @else
                        <div class="flex flex-row">
                            <a href="{{ route('login') }}" class="uppercase tracking-wider border-2 border-blue-500 bg-blue-500 px-2 py-1 rounded-xl hover:bg-noir hover:border-2 hover:border-blue-500 transition-all ease-in-out duration-200">Connexion</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-2 uppercase tracking-wider border-2 border-blue-500 px-2 py-1 rounded-xl hover:bg-blue-500 hover:border-2 hover:border-blue-500 transition-all ease-in-out duration-200">Inscription</a>
                            @endif
                        </div>
                    @endauth
                </div>
            @endif

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
    </body>
</html>

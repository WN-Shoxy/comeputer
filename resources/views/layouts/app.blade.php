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
        <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}

            <!-- Page Heading -->
            @if (Route::has('login'))
                <div class="flex justify-between items-center p-5 bg-noir text-white">
                    <div>
                        <img src="{{url('/img/logo.png')}}" class="w-12" alt="#">
                    </div>
                    <div class="">
                        <ul class="md:hidden hidden lg:flex">
                            <li class="px-5"><a href="{{ url('/') }}" class="uppercase ml-10 tracking-widest hover:border-b-2 border-white transition-all ease-in-out duration-75">Accueil</a></li>
                            <li class="px-5"><a href="{{ route('articles.index') }}" class="uppercase tracking-widest hover:border-b-2 border-white transition-all ease-in-out duration-75">Articles</a></li>
                            <li class="px-5"><a href="{{ url('contact') }}" class="uppercase tracking-widest hover:border-b-2 border-white transition-all ease-in-out duration-75">Contact</a></li>
                        </ul>
                        <button class="text-white sm:inline-flex md:inline-flex lg:hidden border-blue-500 focus:ring-2 focus:ring-blue-500 font-medium rounded-lg text-sm px-4 py-2.5 inline-flex items-center" type="button" data-dropdown-toggle="dropdown"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button><!-- Dropdown menu -->
                        <div class="hidden bg-white text-base z-50 list-none divide-y divide-gray-100 rounded shadow my-4" id="dropdown">
                            <div class="px-4 py-3">
                            <span class="block text-sm font-medium text-gray-900 truncate">
                                @auth{{ Auth::user()->name }}
                                @else
                                @endauth
                            </span>
                            </div>
                            <ul class="py-1" aria-labelledby="dropdown">
                            <li>
                                <a href="{{ url('/') }}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Accueil</a>
                            </li>
                            <li>
                                <a href="{{ route('articles.index') }}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Articles</a>
                            </li>
                            <li>
                                <a href="{{ url('contact') }}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Contact</a>
                            </li>
                            <li>
                                @auth
                                <a href="{{ route('logout') }}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Déconnexion
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Connexion</a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="text-sm hover:bg-gray-100 text-gray-700 block px-4 py-2">Inscription</a>
                                    @endif
                                @endauth
                            </li>
                            </ul>
                        </div>
                    </div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="uppercase tracking-widest lg:inline md:hidden hidden">Mon Profil</a>
                    @else
                        <div class="lg:flex lg:flex-row hidden">
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

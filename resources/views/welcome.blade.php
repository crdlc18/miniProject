<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-red-800 text-white">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-white hover:text-red-500 focus:outline focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-white hover:text-red-500 focus:outline focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-red-500 focus:outline focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="text-center py-16">
                <h1 class="text-4xl font-bold text-white">WELCOME</h1>
                <p class="text-xl text-gray-200">to my <span class="text-red-500 font-bold">mini project</span></p>
            </div>
        </div>
    </body>
</html>

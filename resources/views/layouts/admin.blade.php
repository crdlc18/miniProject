<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        

        <!-- Scripts -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased ">
        <div class="relative min-h-screen md:flex" x-data="{ open: true }">
        
            <!--sidebar--->
            <aside :class="{ '-translate-x-full': !open }" class=" min-h-screen z-10 bg-red-800 text-red-100 w-64 px-2 py-4 absolute inset-y-0 left-0 md:relative transform md:translate-x-0
                    overflow-y-auto transition ease-in-out duration-200 shadow-lg">
                <!--logo-->
                <div class="flex items-center justify-between px-2">
                    <div class="flex items-center space-x-2">
                        <span class="text-2xl front-extrabold mb-4">MENU</span>
                    </div>
                    <button type="button" @click="open = !open" class="inline-flex p-2 items-center justify-center rounded-md text-red-100 
                            hover:bg-red-700 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="block w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                
                <!--nav links-->
                <nav>
                    <x-side-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        Dashboard
                    </x-side-nav-link>
                    <x-side-nav-link href="{{ route('manageEmp.index') }}" :active="request()->routeIs('manageEmp.index')">
                        Manage Employee
                    </x-side-nav-link>
                   
                   
                </nav>
            </aside>

            <!--main page content-->
            <main class="flex-1 h-screen bg-gray-200 light:bg-gray-400 ">
                <nav class="bg-red-900 shadow-lg">
                    <div class="mx-auto px-2 sm:px-6 lg:px-8">
                        <div class="relative flex items-center justify-between md:justify-end h-16">
                            <div class="absolute inset-y-0 left-0 flex items-center md:hidden">
                                <button type="button" @click="open = !open" @click.away="open = false" class="inline-flex items-center
                                        justify-center p-2 rounded-md text-red-100 hover:bg-red-700 focus:outline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="block h-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                </button>
                            </div>
                            <div class="absolute inset-y-0 right-0 items-center">
                                <x-dropdown class="text-right" width="48">
                                    <x-slot name="trigger">
                                        <button class="mt-2 flex items-center text-md text-white font-medium text-white-100 hover:bg-red-700
                                                p-2 rounded-md focus:outline-none transition duration-200 ease-in-out">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                            </svg>
                                            <div class="ml-1">{{ Auth::user()->name }}</div>

                                            <div class="m-2">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>
                                    <x-slot name="content">
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                    onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>
                        </div>
                    </div>

                </nav>
                <div>
                   {{ $slot }} 
                </div>
            </main>

        </div>
    </body>
</html>

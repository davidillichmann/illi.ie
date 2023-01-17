<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

        <!-- Styles -->
        @vite(['resources/css/app.sass', 'resources/js/app.js'])
    </head>
    <body>

        <section class="hero is-success is-fullheight">
            <!-- Hero head: will stick at the top -->
            <div class="hero-head">
                <header class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                    <a class="navbar-item">
                        ILLI IT
                    </a>
                    <span class="navbar-burger" data-target="navbarMenuHeroC">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    </div>
                    <div id="navbarMenuHeroC" class="navbar-menu">
                    <div class="navbar-end">
                        <span class="navbar-item">
                            <a class="button is-success is-inverted">
                                <span class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <span>Contact</span>
                            </a>
                        </span>
                    </div>
                    </div>
                </div>
                </header>
            </div>

            <!-- Hero content: will be in the middle -->
            <div class="hero-body">
                <div class="container has-text-centered">
                <p class="title">
                    Title
                </p>
                <p class="subtitle">
                    Subtitle
                </p>
                </div>
            </div>

        </section>
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> -->
    </body>
</html>

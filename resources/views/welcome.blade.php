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

<body class="is-family-monospace">

    <section class="hero is-success is-fullheight">
        <!-- Hero head: will stick at the top -->
        <div class="hero-head">
            <header class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item is-uppercase">
                            David Illichmann
                        </a>
                        <span class="navbar-burger" data-target="navbarMenuHeroC">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenuHeroC" class="navbar-menu">
                        <div class="navbar-end">
                            <span class="navbar-item">˚
                                <a class="button is-success is-inverted">
                                    <span class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </span>
                                    <span>Contact</span>
                                </a>˚
                            </span>
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <div class="hero-body">
            <div class="container">
                <h1 class="title">Hi, I'm David</h1>
                <h2 class="subtitle">Laravel | Vue.js developer</h2>
            </div>
        </div>

        <footer class="footer">
            <div class="level">
                <div class="level-left">
                    <div class="level-item has-text-grey">
                        <ul>
                            <li class="is-inline-block">
                                <a href="https://www.linkedin.com/in/davidillichmann">LinkedIn</a>
                            </li>
                            <li class="is-inline-block">
                                <a href="https://github.com/davidillichmann">GitHub</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</body>

</html>

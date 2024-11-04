<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
            <!-- Page Heading -->
            <header>
                <div class="header-title">
                    <h1>TITEL</h1>
                    <!-- @include('partials._navigatie', ['vakken' => $vakken]) -->
                </div>
                <div class="header-background">
                    <img src="{{asset('assets/header_background.png')}}" alt="header_background">
                </div>
            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
            <footer>
        <div class="footer-navigation">
            <div class="footer-navigation-paginas">
                <ul>
                    <li><a href="/hijama">hijama</a></li>
                    <li><a href="/cupping">cupping</a></li>
                    <li><a href="/massages">Massages</a></li>
                    <li><a href="/faq">faq</a></li>
                    <li><a href="/diensten_en_tarieven">diensten en tarieven</a></li>
                    <li><a href="/over_ons">over ons</a></li>
                    <li><a href="/contact">contact</a></li>
                </ul>
            </div>
            <div class="footer-navigation-contact">
                <ul>
                    <li><a href="mailto:">info@almedina.nl</a></li>
                    <li><a href="tel:">0612345678</a></li>
                    <li>Straat 1, Purmerend</li>
                    <li>KVK: KVKNUMMER</li>
                </ul>
            </div>
            <div class="footer-navigation-socials">
                <ul>
                    <li><a href="https://instagram.com">instagram</a></li>
                    <li><a href="https://facebook.com">Facebook</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-disclaimer">
            <p>Deze website is gemaakt door <a href="https://santosvdw.nl">Santos van der Wansem</a>.</p>
            <p>Al Medina &copy; 2024. Alle rechten voorbehouden.</p>
        </div>
    </footer>
    </body>
</html>

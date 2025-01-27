<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{$titel}} | Al Medina</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('assets/favicon.png')}}" type="image/png">
        {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js'])
         --}}
         <link rel="stylesheet" href="/build/assets/app-B6uQKN3Z.css">
         <script src="/build/assets/app-Bb-62klp.js" defer></script>
    </head>
    <body class="regular">
        <!--Page navigation -->
        <nav>
            <div class="nav-logo">
                <a href="/"><h5>AL MEDINA</h5></a>
            </div>
            <span class="small-starline"><img src="{{asset('assets/small_starline.png')}}" alt="--+--"></span>
            <div class="nav-links desktop">
                <ul>
                    <li><a href="/cupping">Cupping</a></li>
                    <li><a href="/hijama">Hijama</a></li>
                    <li><a href="/massages">Massages</a></li>
                    <li><a href="/tarieven">Tarieven</a></li>
                    <li><a href="/over_ons">Over ons</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="nav-links mobile">
                <div class="nav-menu-button">
                    <span class="menu-button" id="toggle-visibility" >
                        <i class="bi bi-list"></i>
                    </span>
                </div>
                <div class="nav-menu-list hidden" id="nav-menu-list-element">
                    <ul>
                        <li><a href="/cupping">Cupping</a></li>
                        <li><a href="/hijama">Hijama</a></li>
                        <li><a href="/massages">Massages</a></li>
                        <li><a href="/tarieven">Tarieven</a></li>
                        <li><a href="/over_ons">Over ons</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li>
                            <a href="/https://www.instagram.com/cuppingalmedina/"><i class="bi bi-instagram"></i></a>
                            <a href="https://www.facebook.com/people/Cupping-Al-Medina/pfbid02za1YrvWuf9Ezy31Lshf2mVZiihRL2nCU3NbrEbbP4YPA1NrZPxku1W3ReBodTgohl/"><i class="bi bi-facebook"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            <!-- Page Heading -->
            <header>
                <div class="header-background">
                    <img src="{{asset('assets/'.$foto)}}" alt="{{$titel}}">
                </div>
            </header>
            <div class="header-title">
                <h1>{{$titel}}</h1>
            </div>
            <!-- Page Content -->
            <main>
                <div class="container">
                    @yield('content')
                    <p>Heeft u nog vragen? Bezoek dan onze pagina met <a href="/faq">veelgestelde vragen</a> of neem gemakkelijk contact met ons op via <a href="/contact">Whatsapp!</a></p>
                </div>
            </main>
            <footer>
                <div class="footer-navigation">
                    <div class="footer-navigation-paginas">
                        <h6 class="italic">Pagina's</h6>
                        <ul>
                            <li><a href="/hijama">Hijama</a></li>
                            <li><a href="/cupping">Cupping</a></li>
                            <li><a href="/massages">Massages</a></li>
                            <li><a href="/faq">Veelgestelde vragen</a></li>
                            <li><a href="/tarieven">Tarieven (en diensten)</a></li>
                            <li><a href="/over_ons">Over ons</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-navigation-contact">
                        <h6 class="italic">Contactinformatie</h6>
                        <ul>
                            <li><a href="mailto:info@cuppingalmedina.nl">Email: info@cuppingalmedina.nl</a></li>
                            <li><a href="tel:+31648713668">Tel: +31648713668</a></li>
                            <li>Steve Bikostraat 10, Purmerend</li>
                            <li>KVK: 82253412</li>
                        </ul>
                    </div>
                    <div class="footer-navigation-socials">
                        <h6 class="italic">Sociale media</h6>
                        <ul>
                            <li><a href="https://www.instagram.com/cuppingalmedina/"><i class="bi bi-instagram"></i> Instagram</a></li>
                            <li><a href="https://www.facebook.com/people/Cupping-Al-Medina/pfbid02za1YrvWuf9Ezy31Lshf2mVZiihRL2nCU3NbrEbbP4YPA1NrZPxku1W3ReBodTgohl/"><i class="bi bi-facebook"></i> Facebook</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-disclaimer">
                    <p class="left">Deze website is gemaakt door <a href="https://santosvdw.nl">Santos van der Wansem</a>.</p>
                    <p class="right">Al Medina &copy; 2024. Alle rechten voorbehouden.</p>
                </div>
            </footer>
    </body>
</html>

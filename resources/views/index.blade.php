<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Medina | Hijama, cupping en massages</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="container">
    <div class="hero home">
        <div class="upper-gradient"></div>
        <nav id="home">
            <ul>
                <li><a href="/cupping">cupping</a></li>
                <li><a href="/hijama">hijama</a></li>
                <li><a href="/massages">massages</a></li>
            </ul>
            <ul>
                <li><a href="/tarieven">tarieven</a></li>
                <li><a href="/over_ons">over ons</a></li>
                <li><a href="/contact">contact</a></li>
            </ul>
        </nav>
        <header class="home">
            <div class="header-logo"><img src="{{asset('assets/logoalmedina.png')}}" alt="Al Medina"></div>
            <div class="header-overlay"></div>
            <div class="header-img"><img src="{{asset('assets/background-header.png')}}" alt="Foto van een woestijn"></div>
        </header>
        <div class="lower-gradient"></div>
    </div>
    <main>
        <section class="quote">
            <h3 class="italic">"Ontdek natuurlijke zorg waar welzijn, balans en innerlijke rust samenkomen – bij Al Medina staat jouw gezondheid centraal.,,</h3>
            <article>
                <p>Bij Al Medina helpen we onze klanten om zich beter te voelen door middel van natuurlijke therapieën zoals hijama, cupping, en verschillende massagevormen. Onze behandelingen ondersteunen het lichaam bij het herstellen van balans en gezondheid, gericht op zowel lichamelijk als geestelijk welzijn. Elk consult wordt afgestemd op jouw specifieke behoeften om optimale resultaten te bereiken. Al Medina is opgericht met de missie om natuurlijke behandelingen toegankelijk te maken voor iedereen die zoekt naar gezondheid en innerlijke rust. Wij geloven dat welzijn een recht is en willen onze klanten op een holistische manier ondersteunen. </p>
                <p>Met respect voor islamitische principes en moderne hygiënestandaarden, streven wij naar een hoogwaardige en veilige zorgervaring. Hygiëne is een kernwaarde bij Al Medina. We volgen strikte protocollen om ervoor te zorgen dat alle instrumenten en ruimtes steriel en schoon zijn. Dit waarborgt niet alleen jouw veiligheid, maar ook ons commitment aan de hoogste kwaliteitsnormen in ons vak. <br> <a href="/over_ons">Meer lezen</a></p>
            </article>
            <span class="quote-starline">
                <img src="{{asset('assets/starline.png')}}" alt="--+--">
            </span>
        </section>
        <section class="onze-diensten">
            <h2 class="italic">Onze diensten</h2>
            <div class="onze-diensten-cards">
                <div class="onze-diensten-cards-card">
                    <div class="onze-diensten-cards-card-img"><img src="{{asset('assets/cupping.png')}}" alt="Cupping"></div>
                    <div class="onze-diensten-cards-card-info">
                        <h5>cupping</h5>
                        <p>Ervaar de kracht van eeuwenoude therapie die spanning en gifstoffen loslaat.</p>
                        <ul>
                            <li>Bevordert doorbloeding</li>
                            <li>Vermindert spierspanning</li>
                            <li>Ondersteunt ontgifting</li>
                        </ul>
                        <a href="/cupping">Meer ontdekken</a>
                    </div>
                </div>
                <div class="onze-diensten-cards-card">
                    <div class="onze-diensten-cards-card-img">
                        <img src="{{asset('assets/hijama.png')}}" alt="Hijama">
                    </div>
                    <div class="onze-diensten-cards-card-info">
                        <h5>hijama</h5>
                        <p>Herstel balans en energie met deze traditionele islamitische therapie.</p>
                        <ul>
                            <li>Verlicht pijn</li>
                            <li>Stimuleert detox</li>
                            <li>Verbetert welzijn</li>
                        </ul>
                        <a href="/hijama">Meer ontdekken</a>
                    </div>
                </div>
                <div class="onze-diensten-cards-card">
                    <div class="onze-diensten-cards-card-img">
                        <img src="{{asset('assets/massages.png')}}" alt="Massages">
                    </div>
                    <div class="onze-diensten-cards-card-info">
                        <h5>massages</h5>
                        <p>Ontspan volledig en laat stress en spanning verdwijnen met een gerichte massage.</p>
                        <ul>
                            <li>Verlicht spierpijn</li>
                            <li>Vermindert stress</li>
                            <li>Bevordert flexibiliteit</li>
                        </ul>
                        <a href="/massages">Meer ontdekken</a>
                    </div>
                </div>
            </div>
            <button><a href="/tarieven">Ontdek al onze diensten</a></button>
            <div class="onze-diensten-line links"></div>
            <div class="onze-diensten-line rechts"></div>
        </section>
        <section class="contact" id="contact">
            <h2 class="italic">Contact opnemen</h2>
            <form action="none">
                <div class="contact-form-type">
                    <button id="changeTypeAfspraak" class="italic">Afspraak maken</button>
                    <button id="changeTypeVraag" class="italic">Vraag stellen</button>
                </div>

                <div class="contact-form-naam">
                    <label for="naam"><h6 class="italic">Hoe heet u?*</h6></label>
                    <input type="text" name="naam" id="naam" placeholder="Voer hier uw naam in">
                </div>

                <div class="contact-form-behandeling">
                    <label for="behandeling"><h6 class="italic">Welke behandeling heeft u interesse in?*</h6></label>
                    <div class="contact-form-behandeling-boxes">
                        <span>
                            <input type="checkbox" name="behandeling" id="cupping" value="cupping">
                            <label for="cupping">Cupping</label>
                        </span>
                        <span>
                            <input type="checkbox" name="behandeling" id="hijama" value="hijama">
                            <label for="hijama">Hijama</label>
                        </span>
                        <span>
                            <input type="checkbox" name="behandeling" id="massages" value="massages">
                            <label for="massages">Massages</label>
                        </span>
                    </div>
                </div>

                <div class="contact-form-opmerkingen">
                    <label for="opmerkingen"><h6 class="italic">Heeft u nog aanvullende opmerkingen of vragen?</h6></label>
                    <textarea name="opmerkingen" id="opmerkingen" placeholder="Voer hier eventueel aanvullende vragen of opmerkingen toe"></textarea>
                </div>

                <button onclick="" class="italic"><i class="bi bi-whatsapp"></i> Bericht versturen via whatsapp</button>
            </form>
            <div class="contact-decor">
                <img src="{{asset('assets/side-decor.png')}}" alt="">
            </div>
            <div class="contact-background"></div>
        </section>
        <section class="reviews">
            <h2 class="italic">Reviews</h2>
            <div class="reviews-header">
                <h5 class="italic">Al Medina ontvangt van haar klanten</h5>
                <span class="reviews-stars"></span>
                <h6 class="bold">5 sterren!</h6>
                <span class="starline"><img src="{{asset('assets/starline.png')}}" alt="--+--"></span>
            </div>
            <div class="reviews-body">
                <div class="reviews-cards">
                    <div class="reviews-cards-card">
                            <div class="reviews-cards-card-info">
                                <h6 class="bold">Vanity store</h6>
                                <p>Zeer tevreden! Mariam is professioneel in haar werk en beschikt over veel ervaring en kennis. Ze beantwoordde mijn vragen grondig en gaf waardevolle tips na de behandeling. Zeker voor herhaling vatbaar!</p>
                                <span class="review-cards-card-info-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span>
                            </div>
                        </div>
                        <div class="reviews-cards-card">
                            <div class="reviews-cards-card-info">
                                <h6 class="bold">Bridget Schilperoort</h6>
                                <p>De eerste keer hijama, echt een fijne ervaring! Ik voelde mij meteen enorm verlicht in mijn nek en schouders. Ik zal deze behandeling zeker herhalen bij deze zuster inshallah!</p>
                                <span class="review-cards-card-info-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span>
                            </div>
                        </div>
                        <div class="reviews-cards-card">
                            <div class="reviews-cards-card-info">
                                <h6 class="bold">Touraya Qurimi</h6>
                                <p>Hele fijne Hijama behandeling gehad. Heel professioneel, hygiënisch en ze weet precies waar de pijn plekken zitten. Ik ben genezen na één behandeling van een flinke slijmvliesontsteking.</p>
                                <span class="review-cards-card-info-stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviews-button">
                    <a href="https://www.google.com/search?sca_esv=4dae32ac01e8b27f&hl=nl-NL&sxsrf=ADLYWILsVCEtJPy6eVreqyE-yfy4U9iyEw:1733165733685&q=Cupping+Al+medina&si=ACC90nwjPmqJHrCEt6ewASzksVFQDX8zco_7MgBaIawvaF4-7m5skUoVPrAfLaFGXeBPOjNO3YH5B_q8XCf1aseXlT8JhKiNC-Di74T_rTdJ0b1oauj_GS8%3D&uds=ADvngMg04TnMgw1FI9p1ZAV8hOXNcRzaxzIb5lyMS-3cOBUhVPqSgi2zvt_Iuc5So65baL_9lcMMyfHVi5-3wCT0y-Alb2ARapkwxnUwrhygBb8vZ3zB7yU&sa=X&ved=2ahUKEwiGkJK_4YmKAxW1hP0HHZOyIrwQ3PALegQIGxAE"><button class="italic">Meer reviews lezen</button></a>
                </div>
            </div>
        </section>
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
                    <li><a href="/tarieven">Diensten en tarieven</a></li>
                    <li><a href="/over_ons">Over ons</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-navigation-contact">
                <h6 class="italic">Contactinformatie</h6>
                <ul>
                    <li><a href="mailto:">info@almedina.nl</a></li>
                    <li><a href="tel:">0612345678</a></li>
                    <li>Straat 1, Purmerend</li>
                    <li>KVK: 82253412</li>
                </ul>
            </div>
            <div class="footer-navigation-socials">
                <h6 class="italic">Sociale media</h6>
                <ul>
                    <li><a href="https://instagram.com"><i class="bi bi-instagram"></i> Instagram</a></li>
                    <li><a href="https://facebook.com"><i class="bi bi-facebook"></i> Facebook</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-disclaimer">
            <p class="left">Deze website is gemaakt door <a href="https://santosvdw.nl">Santos van der Wansem</a>.</p>
            <p class="right">Al Medina &copy; 2024. Alle rechten voorbehouden.</p>
        </div>
    </footer>
</div>
</body>
</html>
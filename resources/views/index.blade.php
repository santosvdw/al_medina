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
        <nav>
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
        <header>
            <div class="header-logo"><img src="{{asset('assets/logoalmedina.png')}}" alt="Al Medina"></div>
            <div class="header-overlay"></div>
            <div class="header-img"><img src="{{asset('assets/background-header.png')}}" alt="Foto van een woestijn"></div>
        </header>
        <div class="lower-gradient"></div>
    </div>
    <main>
        <section class="quote">
            <h4 class="italic">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, suscipit.,,</h4>
            <article>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa perspiciatis delectus autem nihil nesciunt, quidem nobis sapiente quisquam laudantium praesentium odit adipisci unde numquam maxime, totam consectetur repellat? Eius ea consequatur obcaecati earum error est dolores corrupti recusandae, omnis labore dolor animi. Nisi excepturi ab, natus maiores doloremque, blanditiis ipsum vero at quasi a accusantium, totam corrupti inventore iure soluta hic! Eaque tempora deserunt neque veritatis aut, velit excepturi dignissimos.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore totam repellat provident adipisci, asperiores ex repudiandae aliquam id, iusto repellendus quo laborum dolorem quia dicta dignissimos tempora laboriosam incidunt eos eligendi vero necessitatibus. Beatae exercitationem itaque nemo odio sed non eius asperiores rerum possimus repellendus. <a href="" target="_blank" rel="noopener noreferrer">Meer ontdekken</a></p>
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sed at officiis.</p>
                        <ul>
                            <li>voordeel 1</li>
                            <li>voordeel 2</li>
                            <li>voordeel 3</li>
                        </ul>
                        <a href="/">Meer ontdekken</a>
                    </div>
                </div>
                <div class="onze-diensten-cards-card">
                    <div class="onze-diensten-cards-card-img">
                        <img src="{{asset('assets/hijama.png')}}" alt="Hijama">
                    </div>
                    <div class="onze-diensten-cards-card-info">
                        <h5>hijama</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet voluptas nam corporis asperiores!</p>
                        <ul>
                            <li>voordeel 1</li>
                            <li>voordeel 2</li>
                            <li>voordeel 3</li>
                        </ul>
                        <a href="/">Meer ontdekken</a>
                    </div>
                </div>
                <div class="onze-diensten-cards-card">
                    <div class="onze-diensten-cards-card-img">
                        <img src="{{asset('assets/massages.png')}}" alt="Massages">
                    </div>
                    <div class="onze-diensten-cards-card-info">
                        <h5>massages</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit, consectetur ab.</p>
                        <ul>
                            <li>voordeel 1</li>
                            <li>voordeel 2</li>
                            <li>voordeel 3</li>
                        </ul>
                        <a href="/">Meer ontdekken</a>
                    </div>
                </div>
            </div>
            <button>Ontdek al onze diensten</button>
            <div class="onze-diensten-line links"></div>
            <div class="onze-diensten-line rechts"></div>
        </section>
        <section class="contact">
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
                <img src="{{asset('assets/contact_decor.svg')}}" alt="{" id="left">
                <img src="{{asset('assets/contact_decor.svg')}}" alt="}" id="right">
            </div>
        </section>
        <section class="reviews">
            <h2 class="italic">Reviews</h2>
            <div class="reviews-header">
                <p class="italic">Al Medina ontvangt van haar klanten</p>
                <span class="reviews-stars"></span>
                <p class="bold">5 sterren!</p>
                <span class="starline"><img src="{{asset('assets/starline.png')}}" alt="--+--"></span>
            </div>
            <div class="reviews-body">
                <div class="reviews-button">
                    <div class="reviews-cards">
                        <div class="reviews-cards-card">
                            <div class="reviews-cards-card-img"></div>
                            <div class="reviews-cards-card-info">
                                <h4 class="italic">Naam</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                <span class="review-cards-card-info-stars"></span>
                            </div>
                        </div>
                        <div class="reviews-cards-card">
                            <div class="reviews-cards-card-img"></div>
                            <div class="reviews-cards-card-info">
                                <h4 class="italic">Naam</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                <span class="review-cards-card-info-stars"></span>
                            </div>
                        </div>
                        <div class="reviews-cards-card">
                            <div class="reviews-cards-card-img"></div>
                            <div class="reviews-cards-card-info">
                                <h4 class="italic">Naam</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quidem.</p>
                                <span class="review-cards-card-info-stars"></span>
                            </div>
                        </div>
                    </div>
                    <button class="italic">Meer reviews lezen</button>
                </div>
            </div>
        </section>
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
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al Medina | Hijama, cupping en massages</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

<div class="container">
    <div class="hero">
        <div class="upper-gradient"></div>
        <nav>
            <ul>
                <li><a href="/cupping">cupping</a></li>
                <li><a href="/hijama">hijama</a></li>
                <li><a href="/massages">massages</a></li>
                <li><a href="/tarieven">tarieven</a></li>
                <li><a href="/over_ons">over ons</a></li>
                <li><a href="/contact">contact</a></li>
            </ul>
        </nav>
        <header>
            <div class="header-logo"><img src="{{asset('assets/logoalmedina.png')}}" alt="Al Medina"></div>
            <div class="header-img"><img src="{{asset('assets/background-header.png')}}" alt="Foto van een woestijn"></div>
        </header>
        <div class="lower-gradient"></div>
    </div>
    <main>
        <section class="quote">
            <h3 class="italic">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, suscipit.,,</h3>
            <article>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa perspiciatis delectus autem nihil nesciunt, quidem nobis sapiente quisquam laudantium praesentium odit adipisci unde numquam maxime, totam consectetur repellat? Eius ea consequatur obcaecati earum error est dolores corrupti recusandae, omnis labore dolor animi. Nisi excepturi ab, natus maiores doloremque, blanditiis ipsum vero at quasi a accusantium, totam corrupti inventore iure soluta hic! Eaque tempora deserunt neque veritatis aut, velit excepturi dignissimos.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore totam repellat provident adipisci, asperiores ex repudiandae aliquam id, iusto repellendus quo laborum dolorem quia dicta dignissimos tempora laboriosam incidunt eos eligendi vero necessitatibus. Beatae exercitationem itaque nemo odio sed non eius asperiores rerum possimus repellendus. <a href="" target="_blank" rel="noopener noreferrer">Meer ontdekken</a></p>
            </article>
            <span class="quote-starline">
                <img src="{{asset('assets/starline.png')}}" alt="--+--">
            </span>
        </section>
        <section class="onze-diensten">
            <h2>Onze diensten</h2>
            <div class="onze-diensten-cards">
                <div class="onze-diensten-cards-card">
                    <div class="onze-diensten-cards-card-img"><img src="{{asset('assets/cupping.png')}}" alt="Cupping"></div>
                    <div class="onze-diensten-cards-card-info">
                        <h4 class="italic">cupping</h4>
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
                        <h4 class="italic">hijama</h4>
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
                        <h4 class="italic">massages</h4>
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

                <div class="contant-form-naam">
                    <label for="naam">Voer uw naam in*</label>
                    <input type="text" name="naam" id="naam">
                </div>

                <div class="contant-form-behandeling">
                    <label for="behandeling">Welke behandeling heeft u interesse in?*</label>
                    <input type="checkbox" name="behandeling" id="cupping" value="cupping">
                    <label for="cupping">Cupping</label>
                    <input type="checkbox" name="behandeling" id="hijama" value="hijama">
                    <label for="hijama">Hijama</label>
                    <input type="checkbox" name="behandeling" id="massages" value="massages">
                    <label for="massages">Massages</label>
                </div>

                <div class="contact-form-opmerkingen">
                    <label for="opmerkingen">Heeft u nog aanvullende opmerkingen of vragen?</label>
                    <textarea name="opmerkingen" id="opmerkingen"></textarea>
                </div>

                <button onclick="" class="italic">Bericht versturen via whatsapp</button>
            </form>
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
@extends('layouts.app')

@section('content')

<div class="contact-pagina">

<section class="contact-cta">
    <div class="contact-cta-links">
        <div class="contact-bellen">
            <span class="links">
                <p>Bellen of whatsapp:</p>
                <a href="tel:+31648713668"><span class="icon"><i class="bi bi-telephone-fill"></i></span>+31648713668</a>
            </span>
        </div>
        <div class="contact-social-media">
            Sociale media:
            <a href="https://www.instagram.com/cuppingalmedina/"><span class="icon"><i class="bi bi-instagram"></i></span>Instagram</a>
            <a href="https://www.facebook.com/people/Cupping-Al-Medina/pfbid02za1YrvWuf9Ezy31Lshf2mVZiihRL2nCU3NbrEbbP4YPA1NrZPxku1W3ReBodTgohl/"><span class="icon"><i class="bi bi-facebook"></i></span>Facebook</a>
        </div>
        <div class="contact-email">
            <span class="links">
                <p>Email:</p>
                <a href="mailto:info@cuppingalmedina.nl"><span class="icon"><i class="bi bi-envelope-fill"></i></span>info@cuppingalmedina.nl</a>
            </span>
        </div>
    </div>
</section>
<section class="form">
    <h3>Contactformulier</h3>
    <form action="/">
        <span class="type">
            <h6>Ik wil een...</h6>
            <span class="type-keuzes">
                <input type="radio" name="type" class="contact-type" required value="afspraak" checked>
                <label for="afspraak">Afspraak maken</label>
                <input type="radio" name="type" class="contact-type" required value="vraag">
                <label for="vraag">Vraag stellen</label>
            </span>
        </span>
        <span class="naam">
            <label for="naam"><h6>Naam:</h6></label>
            <input type="text" name="naam" id="naam" placeholder="Voer hier uw naam in" required>
        </span>
        <span class="behandeling">
            <h6 id="introductie-tekst">Waar gaat uw vraag over?</h6>
            <div>
                <input type="checkbox" name="behandeling" id="behandeling_cupping" value="cupping">
                <label for="behandeling_cupping">Cupping</label>
            </div>
            <div>
                <input type="checkbox" name="behandeling" id="behandeling_hijama" value="hijama">
                <label for="behandeling_hijama">Hijama</label>
            </div>
            <div>
                <input type="checkbox" name="behandeling" id="behandeling_massage" value="massage">
                <label for="behandeling_massage">Massage</label>
            </div>
            <div>
                <input type="checkbox" name="behandeling" id="behandeling_overige" value="overige">
                <label for="behandeling_overige">Overige</label>
            </div>
        </span>

        <span class="opmerkingen">
            <label for="opmerkingen"><h6 id="opmerkingen">Wat is uw vraag?</h6></label>
            <textarea name="opmerkingen_value" id="opmerkingen_value" placeholder="Voer hier uw vraag in"></textarea>
        </span>

        <span class="button">
            <button type="button" id="send-message" class="italic small-button black"><i class="bi bi-whatsapp"></i> Bericht versturen via whatsapp</button>
        </span>

    </form>
</section>
</div>

<div id="map">
    <h3>Onze locatie</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.543183603944!2d4.9575192!3d52.4874064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c607e76c26bca1%3A0x440a538d86bab5d!2sCupping%20Al%20medina!5e0!3m2!1snl!2snl!4v1733173057664!5m2!1snl!2snl" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<br>

@endsection
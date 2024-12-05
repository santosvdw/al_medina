@extends('layouts.app')

@section('content')

<section class="disclaimer">
    <p>Onze cupping behandelingen zijn uitsluitend voor vrouwen en worden in een veilige en hygiënische omgeving uitgevoerd door gecertificeerde therapeuten.</p>
</section>


<section class="paragraph">
    <article>
        <h3>Wat is cupping?</h3>
        <p>Cupping is een therapie waarbij glazen of siliconen cups op de huid worden geplaatst om een vacuüm te creëren. Dit stimuleert de doorbloeding en helpt het lichaam bij het loslaten van opgebouwde spanning en gifstoffen.</p>    
        <br>
        <h3>Welke soorten cupping zijn er?</h3>
        <ul>
            <li><span class="bold">Droge cupping: </span>Hier wordt zuigkracht toegepast zonder dat er bloed wordt afgenomen. Het bevordert de doorbloeding en ontspanning van spieren.</li>
            <li><span class="bold">Natte cupping: </span>Bij natte cupping worden kleine incisies gemaakt om giftige stoffen af te voeren. Dit type cupping wordt vaak gedaan volgens de Sunnah en heeft spirituele en fysieke voordelen.</li>
        </ul>
        <br>
        <h3>Wat zijn de voordelen van cupping?</h3>
        <p>Cupping bevordert onder andere:</p>
        <ul>
            <li>Ontgifting van het lichaam</li>
	        <li>Pijnverlichting</li>
	        <li>Ontspanning en stressvermindering</li>
	        <li>Verbeterde doorbloeding</li>
	        <li>Versterking van het immuunsysteem</li>
        </ul>
        <br>
        <h3>Wanneer mag je niet cuppen?</h3>
        <p>Cupping wordt niet aanbevolen bij bepaalde gezondheidsproblemen, zoals ernstige bloedarmoede, huidinfecties, of als je onlangs een chirurgische ingreep hebt ondergaan. Bespreek jouw gezondheidssituatie altijd met ons.</p>
    </article>
</section>

<section class="form">
    <h3>Formulier</h3>
    <form action="/">
    <span class="naam">
        <label for="naam"><h6>Naam:</h6></label>
        <input type="text" name="naam" id="naam" placeholder="Voer hier uw naam in" required>
    </span>

    <span class="behandeling">
        <h6>Waar gaat uw vraag over?</h6>
        <span id="behandeling-cupping">
            <input type="checkbox" name="behandeling" id="cupping" value="cupping">
            <label for="cupping">Cupping</label>
        </span>
        <span id="behandeling-hijama">
            <input type="checkbox" name="behandeling" id="hijama" value="hijama">
            <label for="hijama">Hijama</label>
        </span>
        <span id="behandeling-massage">
            <input type="checkbox" name="behandeling" id="massage" value="massage">
            <label for="massage">Massage</label>
        </span>
        <span id="behandeling-overige">
            <input type="checkbox" name="behandeling" id="overige" value="overige">
            <label for="overige">Overige</label>
        </span>
    </span>

    <span class="vraag">
        <label for="vraag"><h6>Wat is uw vraag?</h6></label>
        <textarea name="vraag" id="vraag" placeholder="Voer hier uw vraag in" required></textarea>
    </span>

    <span class="button">
        <button onclick="" class="italic small-button black"><i class="bi bi-whatsapp"></i> Bericht versturen via whatsapp</button>
    </span>

    </form>
</section>
@endsection
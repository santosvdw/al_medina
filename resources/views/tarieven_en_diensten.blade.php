@extends('layouts.app')

@section('content')

<section class="disclaimer">
    <p><a href="/tarieven#tarieven">Klik hier</a> om gelijk naar de lijst met tarieven de gaan.</p>
</section>

<section class="paragraph">
    <h3>
        Welke diensten biedt Al Medina aan?
    </h3>
	<p>
        Wij bieden verschillende diensten aan, waaronder:
        <ul>
            <li>
                <span class="bold">Hijama/Cupping:</span> Een traditionele therapie die het lichaam helpt bij het verwijderen van gifstoffen.
                <ul>
                    <li><a href="/tarieven#hijama">Hijama op hijama_op_maat</a></li>
                    <li><a href="/tarieven#hijama">Hijama hoofd</a></li>
                    <li><a href="/tarieven#hijama">Hijama detoxbehandelingen</a></li>
                    <li><a href="/tarieven#hijama">Hijama hotstone behandeling</a></li>
                    <li><a href="/tarieven#cupping">Dry cupping</a></li>
                </ul>
            </li>
            <br>
            <li>
                <span class="bold">Massages:</span> Verschillende soorten massages om spierspanning te verlichten en ontspanning te bevorderen.
                <ul>
                    <li><a href="/tarieven#massages">Hotstone massage</a></li>
                    <li><a href="/tarieven#massages">Oorkaarsen</a></li>
                    <li><a href="/tarieven#massages">Cupping massage</a></li>
                    <li><a href="/tarieven#massages">Hoofd-, nek-, schouder- en rugmassage</a></li>
                    <li><a href="/tarieven#massages">Natural face lifting</a></li>
                    <li><a href="/tarieven#massages">Ontspanningsmassage en sportmassage</a></li>
                    <li><a href="/tarieven#massages">Kindermassage</a></li>
                </ul>
            </li>
            <br>
            <li>
                <span class="bold">Gezondheidsadvies:</span> Persoonlijke begeleiding voor een gezondere levensstijl.
            </li>
        </ul>
    </p>
    <br> <span id="hijama"></span>
    <p>Al Medina biedt een breed scala aan behandelingen, van op maat gemaakte hijama en detoxtherapieën tot ontspannings- en sportmassages, speciaal gericht op het bevorderen van fysieke, mentale en spirituele gezondheid. Elke behandeling is geïnspireerd door traditionele methoden en wordt uitgevoerd met professionele zorg om optimale resultaten te bereiken.</p>
    <br>
    <br>
    <article>
        <h4>Hijama (wet-cupping) behandelingen</h4>
        <br>
        <h5 id="hijama_op_maat">Hijama op maat <span class="italic">(10 cups, 15 cups, of 20 cups)</span></h5>
        <p>Deze behandeling richt zich op het verwijderen van opgehoopte gifstoffen uit het lichaam, wat kan bijdragen aan een betere bloedcirculatie, vermindering van ontstekingen en pijnverlichting. Hijama is bekend om zijn effectiviteit bij het verlichten van verschillende klachten zoals migraine, rugpijn, vermoeidheid en stress.</p>
        <br>
        <h5 id="hijama_hoofd">Hijama hoofd</h5>
        <p>Specifiek gericht op klachten zoals hoofdpijn, migraine en mentale vermoeidheid. Deze behandeling bevordert de bloedtoevoer naar het hoofd, wat kan helpen bij mentale helderheid en stressvermindering.</p>
        <br>
        <h5 id="hijama_detox">Hijama detox</h5>
        <p>
            <ul>
                <li>
                    Algemene reiniging met cupping-massage
                </li>
                <li>
                    Orgaanreiniging met cupping-massage
                </li>
                <li>
                    Reiniging van het lymfatisch systeem met cupping-massage
                </li>
            </ul>
        Deze detoxbehandelingen richten zich op het reinigen van specifieke systemen in het lichaam. De lymfatische reiniging is speciaal ontworpen om het immuunsysteem te ondersteunen, terwijl de orgaanreiniging helpt bij het verlichten van spijsverteringsklachten en de algemene gezondheid bevordert.
        </p>
        <br>
        <h5 id="hijama_hotstone_behandeling">Hotstone behandeling</h5>
        <p>Deze behandeling combineert de voordelen van hijama met de warmte van hotstones, wat zorgt voor diepe ontspanning en verlichting van spierpijn. Het is vooral nuttig voor mensen met stress, slapeloosheid, en spierspanning.</p>
        <span id="cupping"></span>
    </article>
    <br>
    <br>
    <br>
    <article>
        <h4>Dry cupping behandelingen</h4>
        <br>
        <h5>Dry cupping en dry cupping met massage</h5>
        <span id="massages"></span>
        <p>Dry cupping stimuleert de doorbloeding zonder incisie. Het is ideaal voor sporters of mensen met gespannen spieren, omdat het helpt bij het losmaken van weefsel en het verbeteren van flexibiliteit.</p>
    </article>
    <br>
    <br>
    <br>
    <article>
        <h4 id="massages">Massages</h4>
        <br>
        <h5 id="hotstone_massage">Hotstone massage</h5>
        <p>Een verwarmende massage die helpt bij het losmaken van diepe spierlagen en het verminderen van stress. De hotstone-massage is vooral effectief voor mensen met stijve spieren en spanning.</p>
        <br>
        <h5 id="oorkaarsen">Oorkarsen</h5>
        <p>Oorkaarsentherapie bevordert ontspanning en kan helpen bij het verlichten van druk in de sinussen en het verbeteren van de algemene oorgezondheid.</p>
        <br>
        <h5 id="cupping_massage">Cupping massage</h5>
        <p>Een ontspannende cupping-behandeling zonder bloedafname. Het helpt bij het verlichten van spierpijn en het verbeteren van de bloedcirculatie.</p>
        <br>
        <h5 id="hoofd_nek_schouder_rugmassage">Hoofd-, nek-, schouder- en rugmassage</h5>
        <p>Deze massage is gericht op het verlichten van spanning in de nek, schouders en rug en is bijzonder effectief bij hoofdpijn en stress.</p>
        <br>
        <h5 id="natural_face_lifting">Natural face lifting</h5>
        <p>Een gezichtsmassage die de huid helpt verstevigen, ontspant en de natuurlijke uitstraling van de huid verbetert.</p>
        <br>
        <h5 id="onstpanningsmasssage_en_sportmassage">Ontspanningsmassage en sportmassage</h5>
        <p>Beide massages richten zich op diepe ontspanning of spierherstel, afhankelijk van de behoeften. Ontspanningsmassage helpt bij het verminderen van stress, terwijl de sportmassage ideaal is voor spierherstel en het verbeteren van prestaties.</p>
        <br id="tarieven">
        <h5 id="kindermassage">Kindermassage</h5>
        <p>Een massage speciaal gericht op kinderen, om lichamelijke klachten te verhelpen.</p>
    </article>
</section>



<section class="table">
    <h3>Tarieven</h3>
    <h4>Cupping en hijama</h4>
    <table border-collapse="collapse">
        <thead colspan="4"><h6 class="bold">Hijama op maat <em>(Wet cupping)</em></h6></thead>
        <tbody>
            <tr>
                <td class="colspan-3">Hijama op maat -
                10 cups</td>
                <td class="emphasize">&euro;35</td>
            </tr>
            <tr>
                <td class="colspan-3">Hijama op maat -
                15 cups</td>
                <td class="emphasize">&euro;40</td>
            </tr>
            <tr>
                <td class="colspan-3">Hijama op maat -
                20 cups</td>
                <td class="emphasize">&euro;45</td>
            </tr>
        </table>
        <br>
        <table border-collapse="collapse">
            <tr>
                <td class="colspan-3">*Extra cupping-massage module</td>
                <td class="emphasize">&euro;10</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table border-collapse="collapse">
        <thead class="colspan-4"><h6 class="bold">Hijama hoofd</h6></thead>
        <tbody>
            <tr>
                <td class="colspan-3">Hijama hoofdbehandeling</td>
                <td class="emphasize">&euro;35</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table border-collapse="collapse">
        <thead class="colspan-4"><h6 class="bold">Hijama detox</h6></thead>
        <tbody>
            <tr>
                <td class="colspan-3">Algemene reiniging met cupping massage</td>
                <td class="emphasize">&euro;40</td>
            </tr>
            <tr>
                <td class="colspan-3">Orgaanreiniging met cupping massage</td>
                <td class="emphasize">&euro;40</td>
            </tr>
            <tr>
                <td class="colspan-3">Reiniging lymfatisch systeem met cupping massage</td>
                <td class="emphasize">&euro;45</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table border-collapse="collapse">
        <thead class="colspan-4"><h6 class="bold">Dry cupping</h6></thead>
        <tbody>
            <tr>
                <td class="colspan-3">Dry cupping</td>
                <td class="emphasize">&euro;35</td>
            </tr>
            <tr>
                <td class="colspan-3">Dry cupping met massage module</td>
                <td class="emphasize">&euro;35</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table border-collapse="collapse">
        <thead class="colspan-4"><h6 class="bold">Hijama en cupping ontspanning</h6></thead>
        <tbody>
            <tr>
                <td class="colspan-3">Hijama ontspanning met hotstone-beleving</td>
                <td class="emphasize">&euro;45</td>
            </tr>
            <tr>
                <td class="colspan-3">Dry-cupping ontspanning met hotstone-beleving</td>
                <td class="emphasize">&euro;45</td>
            </tr>
        </tbody>
    </table>
    <br><br>
    <h4>Massages</h4>
    <table border-collapse="collapse">
        <thead class="colspan-4"><h6 class="bold">Cupping massages</h6></thead>
        <tbody>
            <tr>
                <td class="colspan-3">Cupping massage (30 minuten)</td>
                <td class="emphasize">&euro;30</td>
            </tr>
            <tr>
                <td class="colspan-3">Cupping massage (60 minuten)</td>
                <td class="emphasize">&euro;50</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table border-collapse="collapse">
        <thead class="colspan-4"><h6 class="bold">Hotstone massages</h6></thead>
        <tbody>
            <tr>
                <td class="colspan-3">Hotstone massage (30 minuten)</td>
                <td class="emphasize">&euro;30</td>
            </tr>
            <tr>
                <td class="colspan-3">Hotstone massage (60 minuten)</td>
                <td class="emphasize">&euro;50</td>
            </tr>
        </tbody>
    </table>
    <br>
    <table border-collapse="collapse">
        <thead class="colspan-4"><h6 class="bold">Overige massages</h6></thead>
        <tbody>
            <tr>
                <td class="colspan-3">Onstpanningsmassage (60 minuten)</td>
                <td class="emphasize">&euro;50</td>
            </tr>
            <tr>
                <td class="colspan-3">Sportmassage (60 minuten)</td>
                <td class="emphasize">&euro;50</td>
            </tr>
            <tr>
                <td class="colspan-3">Hoofd-, nek-, schouder- en rugmassage (30 minuten)</td>
                <td class="emphasize">&euro;30</td>
            </tr>
            <tr>
                <td class="colspan-3">Hoofd-, nek-, schouder- en rugmassage (45 minuten)</td>
                <td class="emphasize">&euro;40</td>
            </tr>
            <tr>
                <td class="colspan-3">Natural facelifting (30 minuten)</td>
                <td class="emphasize">&euro;30</td>
            </tr>
            <tr>
                <td class="colspan-3">Natural facelifting (45 minuten)</td>
                <td class="emphasize">&euro;40</td>
            </tr>
            <tr>
                <td class="colspan-3">Oorkaarsen (30 minuten)</td>
                <td class="emphasize">&euro;30</td>
            </tr>
            <tr>
                <td class="colspan-3">Kindermassage (30 minuten)</td>
                <td class="emphasize">&euro;25</td>
            </tr>
        </tbody>
    </table>
</section>

@endsection
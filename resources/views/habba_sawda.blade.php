@extends('layouts.app')

@section('content')
<section class="paragraph">
    <p>
        <span class="italic">Heb je al gehoord van Habba Sawda?</span>
            Ook wel bekend als zwarte komijnzaadolie of Nigella Sativa -
        dit kleine zwarte zaadje wordt al eeuwenlang gebruikt in de profetische geneeskunde.
        <br>
        De Profeet Mohammed (vrede zij met hem) heeft gezegd:
        "In zwarte zaad zit genezing voor elke ziekte, behalve de dood." (Sahih al-Bukhari)
        <br>
        <br>
    </p>
    <h6>Wat doet Habba Sawda olie voor je?</h6>
    <p>
        Deze 100% pure olie werkt zowel van binnen als van buiten:
        <ul>
            <li>Versterkt je immuunsysteem</li>
            <li>Ondersteunt de spijsvertering</li>
            <li>Helpt bij huidproblemen zoals acne, eczeem en droge huid</li>
            <li>Stimuleert haargroei en vermindert haaruitval</li>
            <li>Werkt ontstekingsremmend en antibacterieel</li>
            <li>Geeft rust, energie en balans aan je lichaam</li>
        </ul>
        <br>
        Cosmetica & geneeskracht in één flesje!
        Gebruik het dagelijks als supplement, huidolie of haarverzorging.
        Versgeperst en rechtstreeks uit Ethiopie - van topkwaliteit.
        <br><br>

        <span class="bold">
            Verkrijgbaar voor &euro;10 bij ons in de praktijk:
            Cupping Al Medina
             {{-- of via <a href="">bol.com</a> --}}
        </span>
    </p>
</section>

<section class="aside">
    <aside>
        <video {{--width="640"--}} height="360" controls>
            <source src="{{asset('assets/habba_sawda.mp4')}}" type="video/mp4">
            Je browser ondersteunt het video-element niet.
          </video>
    </aside>
</section>
@endsection
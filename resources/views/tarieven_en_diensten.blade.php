@extends('layouts.app')

@section('content')

<section class="paragraph">
    <h3>
        Welke diensten biedt Al Medina aan?
    </h3>
	<p>
        Wij bieden verschillende diensten aan, waaronder:
        <ul>
            <li>
                <span class="bold">Hijama/Cupping:</span> Een traditionele therapie die het lichaam helpt bij het verwijderen van gifstoffen.
            </li>
            <li>
                <span class="bold">Massages:</span> Verschillende soorten massages om spierspanning te verlichten en ontspanning te bevorderen.
            </li>
            <li>
                <span class="bold">Gezondheidsadvies:</span> Persoonlijke begeleiding voor een gezondere levensstijl.
            </li>
        </ul>
    </p>
</section>


<section class="table">
    <h3>Tarieven</h3>
    <h4>Cupping en hijama</h4>
    <table border-collapse="collapse">
        <thead colspan="4"><h6 class="bold">Hijama op maat</h6></thead>
        <tbody>
            <tr>
                <td>Hijama op maat</td>
                <td>(Wet cupping)</td>
                <td>10 cups</td>
                <td class="emphasize">&euro;35</td>
            </tr>
            <tr>
                <td>Hijama op maat</td>
                <td>(Wet cupping)</td>
                <td>15 cups</td>
                <td class="emphasize">&euro;40</td>
            </tr>
            <tr>
                <td>Hijama op maat</td>
                <td>(Wet cupping)</td>
                <td>20 cups</td>
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
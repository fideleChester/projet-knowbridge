@extends('base')
@section('title','BLOG -| '.env('APP_NAME'))

@section('content')
<section class="ctn-blog">
    <div class="titre t1">
        <h1>Articles de blogue</h1>
    </div>
    <div class="ctn-menu">
        <a id='a1'href="#">Dernières nouvelles</a>
        <a id='a2' href="#">Etudiants et Histoires</a>
        <a id='a3'href="#">Articles de blogue</a>
    </div>
</section>





<div class="ctn-elite">
    <div class="ctn-elite_ ctn-l1">
        <h1>Élite</h1>
        <ul class="list">
            <li>BAC en 2022</li>
            <li> 16 de moyenne ou 80%</li>
            <li>Passer le concours de sélection Knowbridge*</li>
            <li> Maintenir 76% (MGP de 3.0) durant son parcours à KBU</li>
        </ul>
        <button class="btn right w">100%</button>
    </div>
    <div class="ctn-elite_ ctn-l2">
        <h1>Excellente</h1>
        <ul class="list">
            <li>18 de moyenne ou 90% au BAC</li>
            <li>Maintenir 76% (MGP de 3.0) durant son parcours à KBU</li>
        </ul>
        <button class="btn right w">50%-60%</button>
    </div>
    <div class="ctn-elite_ ctn-l">
        <h1>Très bien</h1>
        <ul class="list">
            <li>16 de moyenne ou 80% au BAC</li>
            <li> Faire partir des 100 premières personnes qualifiées pour cette bourse</li>
            <li> Maintenir 76% (MGP de 3.0) durant son parcours à KBU</li>
        </ul>
        <button class="btn right w">40%-50%</button>
    </div>

</div>

<div class="ctn-elite">
    <div class="ctn-elite_  ctn-l1">
        <h1>Bien</h1>
        <ul class="list">
            <li>14 de moyenne ou 70% au BAC</li>
            <li> Faire partir des 75 premières personnes qualifiées pour cette bourse</li>
            <li> Maintenir 72% (MGP de 2.7) durant son parcours à KBU</li>
        </ul>
        <button class="btn right w">30%-40%</button>
    </div>
    <div class="ctn-elite_ ctn-l2">
        <h1>assez-bien</h1>
        <ul class="list">
            <li>12 de moyenne ou 60% au BAC</li>
            <li> Faire partir des 50 premières personnes qualifiées pour cette bourse</li>
            <li> Maintenir 68% (MGP de 2.3) durant son parcours à KBU</li>
        </ul>
        <button class="btn right w">20%-30%</button>
    </div>
    <div class="ctn-elite_ ctn-l">
        <h1>concours</h1>
        <ul class="list">
            <li>10 à 11.9 de moyenne ou 50% à 59% au BAC</li>
            <li> Passer le concours d’entrée et faire partir des 25 meilleurs**</li>
            <li> Maintenir 68% (MGP de 2.3) durant son parcours à KBU</li>
        </ul>
        <button class="btn right w">10%-20%</button>
    </div>

</div>

@endsection

@extends('base')
@section('title','Bourses | '.env('APP_NAME'))
@section('content')

    <div class="ctns-img-1">
        <img src="{{asset('img/head-cap.png')}}" alt="">
    </div>

    <div class="brses">
        <h1>Bourses pour les bacheliers</h1>
        <ul>
            <li><a href="#" id="first-a">Département</a></li>
            <li><a href="#">Carrière</a></li>
            <li><a href="#">Stages</a></li>
        </ul>
    </div>

    <div class="ctn-brses">
        <h2>BOURSES D'ÉTUDES ET FINANCEMENT</h2>
        <p>KBU offre plusieurs bourses d'entrée aux candidats les mieux classés pour les diplômes de niveau licence.</p>
        <div class="ctn-cri">
            <p>En plus des critères d’admissibilité généraux, le candidat doit :</p>
            <ul>
                <li><span>1. </span> Avoir obtenu son BAC (ou un diplôme équivalent) dans les trois (3) années précédant la demande d’admission.</li><br>
                <li><span>2. </span>S’inscrire à temps plein chaque session durant tout son parcours</li>
            </ul>
        </div>
        <div class="cana">
            <h1>BOURSE KNOWIDE CANADA</h1>
            <p>Avec une moyenne minimale de 10 sur 20 au baccalauréat, obtenez 50% de réduction des frais de scolarité </p>
            <h2 id="cri-hz"> CRITÈRES D'ADMISSIBILITÉS</h2>
            <div class="ctn-cert crit">
                <ul class="list1 list">
                    <li>Avoir obtenu son BAC (ou un diplôme équivalent) dans les trois (3) années précédant la demande d’admission ;</li>
                    <li>Avoir 10-20 de moyenne au BAC ;</li>
                    <li>Passer une entrevue de sélection Knowide Canada dans les locaux partenaires ou par vidéoconférence ;</li>
                    <li>S'inscrire à temps plein chaque session durant tout son parcours;</li>
                    <li>Maintenir une moyenne minimale de 68% (GPA de 2.3) durant son parcours;</li>
                    <li>Nombre des bourses/places disponibles dans le monde 100 (être parmi les 100) premières personnes à être qualifiées pour les bourses</li>
                </ul>
            </div>
        </div>

    </div>

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
        <div class="ctn-elite_ ctn-l1">
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

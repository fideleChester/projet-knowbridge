@extends('base')
@section('title','Bourses - '.env('APP_NAME'))

@section('content')
<div class="ctns-img-1">
    <img src="{{asset('img/head-cap.png')}}" alt="">
</div>

<div class="brses">
    <h1>Bourses pour les bacheliers</h1>
</div>

<div class="dep-text carr others">
    <h1>Bourses pour les bacheliers</h1>
    <p>En plus des critères d’admissibilité généraux, le
        candidat doit :</p>
</div>

<div class="ctn-brses">
    <div class="ctn-cri">
        <ul>
            <li><span>1. </span> Avoir obtenu son BAC (ou un diplôme équivalent) dans les trois (3) années précédant la demande d’admission.</li><br>
            <li><span>2. </span>S’inscrire à temps plein chaque session durant tout son parcours</li>
        </ul>
    </div>
    <div class="ctn-elite ">
        <div class="ctn-elite_ cnt-bs ctn-l1">
            <span></span>
            <h1>Élite</h1>
            <ul class="list">
                <li>BAC en 2022</li>
                <li> 16 de moyenne ou 80%</li>
                <li>Passer le concours de sélection Knowbridge*</li>
                <li> Maintenir 76% (MGP de 3.0) durant son parcours à KBU</li>
            </ul>
            <button class="btn right w">100%</button>
        </div>
        <div class="ctn-elite_ cnt-bs ctn-l2">
            <span></span>
            <h1>Excellente</h1>
            <ul class="list">
                <li>18 de moyenne ou 90% au BAC</li>
                <li>Maintenir 76% (MGP de 3.0) durant son parcours à KBU</li>
            </ul>
            <button class="btn right w">100%</button>
        </div>
        <div class="ctn-elite_ cnt-bs ctn-l">
            <span></span>
            <h1>Très bien</h1>
            <ul class="list">
                <li> 16 de moyenne ou 80% au BAC</li>
                <li> Faire partir des 100 premières personnes qualifiées pour cette bourse</li>
                <li> Maintenir 76% (MGP de 3.0) durant son parcours à KBU</li>
            </ul>
            <button class="btn right w">100%</button>
        </div>

    </div>
    <div class="ctn-elite">
        <div class="ctn-elite_ cnt-bs ctn-l1">
            <span></span>
            <h1>bien</h1>
            <ul class="list">
                <li>14 de moyenne ou 70%
                    au BAC</li>
                <li>Faire partir des 75
                    premières personnes
                    qualifiées pour cette
                    bourse</li>
                <li>Maintenir 72% (MGP de
                    2.7) durant son parcours
                    à KBU
                    </li>
            </ul>
            <button class="btn right w">30%-40%</button>
        </div>
        <div class="ctn-elite_ cnt-bs ctn-l2">
            <span></span>
            <h1>assez-bien</h1>
            <ul class="list">
                <li>12 de moyenne ou 60%
                    au BAC
                    </li>
                <li>Faire partir des 50
                    premières personnes
                    qualifiées pour cette
                    bourse
                    </li>
                <li>Maintenir 68% (MGP de
                    2.3) durant son parcours
                    à KBU
                    </li>
            </ul>
            <button class="btn right w">20%-30%</button>
        </div>
        <div class=" ctn-elite_  cnt-bs ctn-l">
            <span></span>
            <h1>concours</h1>
            <ul class="list">
                <li>10 à 11.9 de moyenne ou
                    50% à 59% au BAC</li>
                <li>Passer le concours
                    d entrée et faire partir des
                    25 meilleurs**
                    </li>
                <li>Maintenir 68% (MGP de
                    2.3) durant son parcours
                    à KBU </li>
            </ul>
            <button class="btn right w">10%-20%</button>
        </div>

    </div>

    <div class="ctn-brses">
        <p>Le partenaire obtient: </p>
        <div class="ctn-cri ">
            <ul>
                <li><span>1. </span> Avoir obtenu son BAC (ou un diplôme équivalent) dans les trois (3) années précédant la demande d’admission.</li><br>
                <li><span>2. </span>S’inscrire à temps plein chaque session durant tout son parcours</li>
                <button class="btn right w">En savoir plus<i class='bx bxs-chevron-right-circle'></i></button>
            </ul>

        </div>

        <div class="ctn-elite ctn-elite1">
            <div class=" ctn-v s1">
                <span>PARTENAIRE
                    SILVER</span>
                <ul class="list list1">
                    <li>Apporter au moins 30 étudiants à KBU</li>
                    <li>Atteindre le quota de 30 étudiants pour
                        maintenir son statut chaque année</li>
                    <li>Faire la publicité de KBU</li>
                    <li>Une bourse allant de 25% à 35% pour toute
                        personne admise à KBU à travers ce partenariat</li>
                </ul>
            </div>
            <div class="ctn-v s2">
                <span>PARTENAIRE
                    GOLD</span>
                <ul class="list list1">
                    <li>Apporter au moins 50 étudiants à KBU
                        </li>
                    <li>Atteindre le quota de 50 étudiants pour
                        maintenir son statut chaque année
                        </li>
                    <li>Faire la publicité de KBU
                        </li>
                    <li>Une bourse allant de 35% à 45% pour toute
                        personne admise à KBU à travers ce partenariat</li>
                </ul>
            </div>
            <div class="ctn-v s1">
                <span>PARTENAIRE
                    bRONZE</span>
                <ul class="list list1">
                    <li>Apporter au moins 10 étudiants à KBU                    </li>
                    <li>Atteindre le quota de 10 étudiants pour maintenir
                        son statut chaque année</li>
                    <li>Faire la publicité de KBU</li>
                    <li>Une bourse allant de 15% à 25% pour toute
                        personne admise à KBU à travers ce partenariat</li>
                </ul>
            </div>
        </div>


@endsection

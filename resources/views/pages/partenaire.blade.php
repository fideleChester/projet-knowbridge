@extends('base')
@section('title','Partenaire | '.env('APP_NAME'))

@section('content')
<section class="bgn ctn-universite ctn-partenaire">
    <div class="titre h1-uni">
        <h1>
            Nos <br> Partenaires</h1>
    </div>
</section>

<div class="ctn-universite1">
    <h1>BOURSES PARTENAIRES</h1>
</div>

<div class="ctn-brses ctn-patenaire-brses">
    <p>Le partenaire obtient: </p>
    <div class="ctn-cri">
        <ul>
            <li><span>1. </span>Un pourcentage sur les frais d’admission de tout candidat
                recommandé par lui qui fait sa demande et paye les frais</li><br>
            <li><span>2. </span>Un pourcentage sur les frais d’admission de tout candidat
                recommandé par lui qui fait sa demande et paye les frais</li>
        </ul>
    </div>
</div>

<div class="ctn-elite ctn-elite1 nnn">
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



    <div class="ctn-universite1">
        <h1>PARTENAIRES ET ORGANISATIONS</h1>
    </div>

    <div class="ctn-img-patrnaire">
        <div class="ctn-part">
            <a href="#"><img src="{{asset('img/logo-suisco.png')}}" alt="logo-suisco"></a>
            <a href="#"><img src="{{asset('img/logo-ifnti.png')}}" alt="logo-ifnti"></a>
        </div>
        <div class="ctn-part">
            <a href="#"><img src="{{asset('img/logo-bizz.png')}}" alt="logo-bizz"></a>
            <a href="#"><img src="{{asset('img/logo-icrfp.png')}}" alt="logo-icrfp"></a>
        </div>
    </div>

    <style>
        .ctn-partenaire{
            background: url({{asset('img/partenaire.png')}}) no-repeat center/cover ;
        }
    </style>

@endsection

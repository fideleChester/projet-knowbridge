@extends('base')
@section('title','Notre Université |'.env('APP_NAME'))

@section('content')
<section class="bgn ctn-universite">
    <div class="titre h1-uni">
        <h1>
            Notre Université
        </h1>
    </div>

</section>

<div class="ctn-universite1">
    <h1>QUI SOMMES-NOUS?</h1>
</div>

<div class="ctn-elite">
    <div class="ctn-elite_ ctn-univ">
        <h2>KBU est légitime</h2>
        <p>Toute école doit être accréditée
            pour être considérée comme
            légitime. L'accréditation est
            réalisée par le biais d'une
            évaluation rigoureuse et garantit
            que l'école respecte les meilleures
            pratiques de l'enseignement
            supérieur. Cela signifie que
            l’institution répond aux normes
            exigées par les ministères en
            charge de l'enseignement
            supérieur. KBU détient l’agréement
            du ministère de l’enseignement
            supérieur et de la recherche du
            Togo avec l’arrêté No 098/2021/
            MESR/SG/DES
            </p>
            <div class="align-3"><img src="{{asset('img/icon1.png')}}" alt=""></div>
    </div>
    <div class="ctn-elite_ ctn-univ ctn-120" >
        <h2>Haut niveau d'excellence</h2>
        <p>Knowbridge souhaite révolutionner
            l’enseignement supérieur en
            misant sur le haut niveau
            d’excellence en enseignement et
            en recherche, tout en rendant son
            enseignement flexible et accessible
            à tous .
            </p>

            <div class="align-3"><img src="{{asset('img/icon2.png')}}" alt=""></div>

    </div>
    <div class="ctn-elite_ ctn-univ">
        <h2>Principe</h2>
        <p>Knowbridge adhère au principe No
            4 des objectifs de développement
            durable de l’Organisation des
            Nations Unies qui vise à assurer
            l’accès de tous à une éducation de
            qualité, sur une base d’égalité, ainsi
            que la promotion des possibilités
            d’apprentissage tout au long de la
            vie.
            </p>

            <div class="align-3"><img src="{{asset('img/icon3.png')}}" alt=""></div>
    </div>
</div>
<div class="trois_">
    <div><p></p></div>
    <div><p id="deux-p"></p></div>
    <div><p></p></div>
</div>

<div class="ctn-universite1">
    <h1>NOS VALEURS</h1>
</div>

<div class="ctn-elite">
    <div class="ctn-elite_ ctn-univ dim-he-ctn">
        <h2>KBU est légitime</h2>
        <p>Nous identifions les possibilités de
            faciliter la réussite des étudiants
            par l'exécution de méthodes
            transformatrices, de solutions
            efficaces, efficientes et innovantes.
            </p>
            <div class="align-3"><img src="{{asset('img/icon4.png')}}" alt=""></div>
    </div>
    <div class="ctn-elite_ ctn-univ dim-he-ctn ctn-120">
        <h2>Développement professionnel</h2>
        <p>Knowbridge chérit l’évolution en
            permanence et l’apprentissage
            continue et s'engage à assurer le
            développement professionnel de
            son corps enseignant, de son
            personnel et de ses étudiants.
            </p>

            <div class="align-3"><img src="{{asset('img/icon5.png')}}" alt=""></div>

    </div>
    <div class="ctn-elite_ ctn-univ dim-he-ctn">
        <h2>Collaboration</h2>
        <p>La collaboration fait partie
            intégrante de Knowbridge.
            L’intégration, la collaboration, le
            respect des contributions de tous,
            la cordination entre les différents
            participants sont des méthodes
            que nous mettons en valeur.
            </p>

            <div class="align-3"><img src="{{asset('img/icon6.png')}}" alt=""></div>
    </div>
</div>
<div class="trois_">
    <div><p></p></div>
    <div><p id="deux-p"></p></div>
    <div><p></p></div>
</div>

<style>
    .ctn-universite{
        background: url({{asset('img/universite.png')}}) no-repeat center/cover ;
    }
</style>

@endsection

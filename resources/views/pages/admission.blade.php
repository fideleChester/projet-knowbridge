@extends('base')
@section('title','Admission | '. env("APP_NAME"))
@section('content')

<section>
    <div class="bgn">
        <div class="titre">
            <h1>Intégrer notre Université
D’excellence maintenant</h1>
        </div>
        <div class="sous-titre">
            <p></p>
        </div>
    <div class="btn-container">
		<button class="btn left"><i class='bx bxs-error-alt'></i> En savoir plus</button>
		<button class="btn right">Demande d'Admission <i class='bx bxs-chevron-right-circle'></i></button>
	</div>
    </div>
</section>
<section class = "ctn-middle">
    <img class ="img-bot"src="{{asset('img/tms7.png')}}" alt="">
    <img class ="img-rb"src="{{asset('img/tms8.png')}}" alt="">
    <img class ="img-tr"src="{{asset('img/tms9.png')}}" alt="">
    <div class="link">
        <h1>ce qu’il vous faut</h1>
        <ul class="lists">
            <li classs = "c">
                <span>1</span>
                <p>CHOISIR UN PROGRAMME</p>
                <button class="btn right w">VOIR LES PROGAMMES <i class='bx bxs-chevron-right-circle'></i></button>
            </li>
            <li>
                <span>2</span>
                <p>​VERIFIER LES EXIGENCES</p>
                <button class="btn right w">VOIR LES EXIGENCES<i class='bx bxs-chevron-right-circle'></i></button>
            </li>
            <li>
                <span>3</span>
                <p>​VERIFIER LES FRAIS DE SCOLARITÉ</p>
                <button class="btn right w">VOIR LES PROGAMMES <i class='bx bxs-chevron-right-circle'></i></button>
            </li>
            <li>
                <span>4</span>
                <p>VERIFIER LES BOURSES</p>
                <button class="btn right w">VOIR LES BOURSES <i class='bx bxs-chevron-right-circle'></i></button>
            </li>
            <li>
                <span>5</span>
                <p>​FAIRE LA DEMANDE D'ADMISSION</p>
                <button class="btn right w">DEMANDE D’ADMISSION<i class='bx bxs-chevron-right-circle'></i></button>
            </li>
        </ul>
    </div>
</section>
<section class="ctn-exig">

    <h1>Exigences minimales pour étudier à KBU</h1>
    <div class="ctn-all">
        <div class="ctn-2">
            <img src="{{asset('img/learn.png')}}" alt="">
            <h2>1. Être titulaire d’un baccalauréat ou équivalent</h2>
            <p>Nous t'offrons la possibilité d'intégrer notre université virtuelle d'excellence de renommée internationale.
                Nous y avons pensé et avons façonné la meilleure opportunité pour toi.
                Avec Knowbridge, étudies depuis chez toi et obtient une formation diplômante basée sur le système nord-américain.</p>
                <a href="#">Continuer vers<i class='bx bxs-chevron-right-circle'></i></a>
        </div>

        <div class="ctn-1">
            <img src="{{asset('img/teach.png')}}" alt="">
            <h2>2. Passer l'examen et l'interview</h2>
            <p>Nous t'offrons la possibilité d'intégrer notre université virtuelle d'excellence de renommée internationale.
                Nous y avons pensé et avons façonné la meilleure opportunité pour toi.
                Avec Knowbridge, étudies depuis chez toi et obtient une formation diplômante basée sur le système nord-américain.</p>
        <a href="#">Continuer vers<i class='bx bxs-chevron-right-circle'></i></a>
        </div>
    </div>

</section>
<section class="ctn-exig">

    <h1>Exigences minimales pour étudier à KBU</h1>
    <div class="ctn-all">
        <div class="ctn-2">
            <img src="{{asset('img/tms10.png')}}" alt="">
            <h2>3. Avoir un bon ordinateur</h2>
            <p>Avoir un ordinateur d’au moins 8 Gb de mémoire RAM muni d’une caméra et d’un micro interne ou externe.</p>
                <a href="#">Continuer vers<i class='bx bxs-chevron-right-circle'></i></a>
        </div>

        <div class="ctn-1">
            <img src="{{asset('img/internet.png')}}" alt="">
            <h2>4. Avoir une bonne connexion internet</h2>
            <p>Les cours en ligne exigent une bonne connexion internet. Vous devez avoir accès à une bonne connexion internet d’au moins 10 Mb/s.</p>
        <a href="#">Continuer vers<i class='bx bxs-chevron-right-circle'></i></a>
        </div>
    </div>

</section>
<div class="ctn-adm">
    <h1>Exigences d’admission</h1>
    <div class="ctn-cert">
        <h5>Pour les études au certificat et Licence </h5>
        <ul class="list">
            <li>Obtenir au moins 60 % ou 12/20 au BAC ou dans un diplôme équivalent*</li>
            <li> Une (1) copie certifiée de l’acte ou du certificat de naissance</li>
            <li>Une (1) photo d’identité datant de moins de 6 mois</li>
            <li>Une (1) pièce d’identité valide avec photo</li>
            <li> Une (1) copie certifiée de l’attestation du BAC ou du diplôme équivalent</li>
            <li>Une (1) copie certifiée du relevé de notes des épreuves/examen du BAC**</li>
        </ul>
    </div>
</div>

<div class="ctn-adm">
    <h1>Exigences d’admission</h1>
    <div class="ctn-cert">
        <h5 id="th5">Pour les études au niveau master</h5>
        <p>Vous devez soumettre tous les documents requis pour la licence plus les documents ci-dessous:</p>

        <ul class="list">
            <li> Obtenir au moins 60 % ou 12/20 au niveau licence*</li>
            <li> Une (1) copie certifiée des relevés de notes de licence</li>
            <li> Une (1) copie certifiée du diplôme de licence (le cas échéant)</li>
            <li> Un (1) curriculum vitae</li>
            <li>Deux (2) lettres de recommandation</li>
            <li>Lettre de motivation ou énoncé de recherche(1000 mots)</li>
            <li>Bonne connaissance de l'anglais</li>
        </ul>
    </div>
</div>


@endsection

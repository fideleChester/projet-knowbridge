@extends('base')
@section('title','Programmes | '. env("APP_NAME")) 
@section('content')
<section>
    <div class="bgn">
        <div class="titre">
            <h1>Obtenez une Formation
    Diplômante basée sur système 
    Nord-Américain</h1>
        </div>
        <div class="sous-titre">
            <p>Devenez expert, en cybersécurité, au métiers du digital et bien d’autres...</p>
        </div>
    <div class="btn-container">
		<button class="btn left"><i class='bx bxs-error-alt'></i> En savoir plus</button>
		<button class="btn right">Demande d'Admission <i class='bx bxs-chevron-right-circle'></i></button>
	</div>
    </div>
</section>
<div class ="container-infos-pro" >

<div class="img-pro posi">
        <img src="{{ asset('img/tms2.png') }}" alt="">
    </div>
    <div class="progs" >
        <h1 id="c">Technologie de l'information</h1>
            <p>Dans ce monde de plus en plus numérique, les professionnels des TI sont essentiels au fonctionnement de toute entreprise dans tous les secteurs économiques.
    </p>
    <button class="btn right">En savoir plus <i class='bx bxs-chevron-right-circle'></i></button>
    </div>
</div>
<div class="cyber out">
    <img src="{{ asset('img/security.png') }}" alt="key">
    <h1>CYBERSÉCURITÉ</h1>
    <p>Dans ce monde de plus en plus numérique, les professionnels des TI sont essentiels au fonctionnement de toute entreprise dans tous les secteurs économiques.
</p>   
 <button class="btn right">En savoir plus <i class='bx bxs-chevron-right-circle'></i></button>
</div>

<div class ="ctn" >
    <div class="ctn-in" >
            <h1 id="c">Réseaux et 
    télécommunications</h1>
            <p>Obtenez des connaissances et une expérience professionnelle dans les déploiements de réseaux d'entreprise et des réseaux de fournisseurs d'accès internet qui permettra de compétir à l'échelle Mondiale.</p>
            <button class="btn right">En savoir plus <i class='bx bxs-chevron-right-circle'></i></button>    
        </div>
        <div class="ctn-img">
            <img src="{{ asset('img/wifi.png') }}" alt="">
        </div>
</div>
<div class ="ctn" >
    <div class="ctn-in" >
            <h1 id="c">Développement des
applications Web</h1>
            <p>Développez une application Web depuis sa conception, son développement jusqu’au lancement.Apprenez à créer des applications web multiplateformes fonctionnelles à l’aide de technologies Web comme HTML5, CSS et JavaScript.</p>
            <button class="btn right">En savoir plus <i class='bx bxs-chevron-right-circle'></i></button>    
        </div>
        <div class="ctn-img">
            <img src="{{ asset('img/andro.png') }}" alt="">
        </div>
</div>
<div class ="container-infos-pro" >
<div class="img-pro posi">
        <img src="{{ asset('img/tms4.png') }}" alt="">
    </div>
<div class="progs" >
        <h1 id="c">Science de Gestion</h1>
            <p>Dans ce monde de plus en plus numérique, les professionnels des TI sont essentiels au fonctionnement de toute entreprise dans tous les secteurs économiques.
    </p>
    <button class="btn right">En savoir plus <i class='bx bxs-chevron-right-circle'></i></button>
    </div>
</div>

<div class="cyber out">
    <h1>Entrepreneuriat</h1>
    <p>La formation en entrepreneuriat permet aux diplômés d'acquérir une variété de compétences nécessaires pour lancer et gérer une entreprise. Découvrez votre créativité et talent avec ce diplôme.
</p>  
<img src="{{ asset('img/tms3.png') }}" alt="cloud">
 <button class="btn right">En savoir plus <i class='bx bxs-chevron-right-circle'></i></button>
</div>

<div class ="ctn mg" >
    <div class="ctn-in" >
            <h1 id="c">Marketing</h1>
            <p>Alors que la concurrence mondiale s'intensifie, les organisations s'appuient de plus en plus sur des professionnels qualifiés en marketing pour identifier et développer de nouveaux produits et marchés rentables.</p>
            <button class="btn right">En savoir plus <i class='bx bxs-chevron-right-circle'></i></button>    
        </div>
        <div class="ctn-img">
            <img src="{{ asset('img/tms6.png') }}" alt="">
        </div>
</div>
<div class="cyber out">
    <h1>Ressources humaines</h1> 
<img src="{{ asset('img/tms5.png') }}" alt="cloud">
<p>Alors que la concurrence mondiale s'intensifie, les organisations s'appuient de plus en plus sur des professionnels qualifiés en marketing pour identifier et développer de nouveaux produits et marchés rentables.
</p> 
 <button class="btn right">En savoir plus <i class='bx bxs-chevron-right-circle'></i></button>
</div>
@endsection
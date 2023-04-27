@extends('base')
@section('title','Department | '.env('APP_NAME'))
@section('content')
 <div class="ctn-dep">
    <img src="{{asset('img/tea.png')}}" alt="Teach">
    <h1>Département</h1>
    <img src="{{asset('img/lear.png')}}" alt="">
 </div>

 <div class="brses dep-btn">

    <ul>
        <li><a href="#" id="first-a">Département</a></li>
        <li><a href="#">Carrière</a></li>
        <li><a href="#">Stages</a></li>
    </ul>
</div>
<div class="dep-text">
        <h1>DÉPARTEMENT DES  TECHNOLOGIES DE   L'INFORMATION
        </h1>
        <p>Le département des technologies de l'information offre trois (3) types de diplômes (Certificat BAC+1, Licence BAC+3 et Master BAC+5) en Cybersécurité, Réseaux et télécommunication et Technologie de l'information.</p>
 </div>

 <section class="sec-dprt1">
    <div class ="dprt-tech scale-box">
        <div class="deprt-txt-img">
            <h1>TECHNOLOGIE DE L'INFORMATION</h1>
            <p>Devenez un expert dans le 
                monde numérique.</p>
            <button class="btn right">En savoir plus<i class='bx bxs-chevron-right-circle'></i></button>
        </div>
        <img src="{{asset('img/mesa.png')}}" alt="">
    </div>
    <div class ="dprt-tech scale-box">
        <div class="deprt-txt-img">
            <h1>CYBERSÉCURITÉ</h1>
            <p>Devenez un expert dans la protection des données.</p>
            <button class="btn right">En savoir plus<i class='bx bxs-chevron-right-circle'></i></button>
        </div>
        <img src="{{asset('img/mesa.png')}}" alt="">
    </div>
 </section>

 <section class="sec-dprt1 m15">
    <div class ="dprt-tech scale-box">
        <div class="deprt-txt-img">
            <h1>RÉSEAUX ET TÉLÉCOMMUNICATION</h1>
            <p>Devenez un expert dans le déploiement des réseaux.</p>
            <button class="btn right">En savoir plus<i class='bx bxs-chevron-right-circle'></i></button>
        </div>
        <img src="{{asset('img/mesa.png')}}" alt="">
    </div>
    <div class ="dprt-tech scale-box">
        <div class="deprt-txt-img">
            <h1>DÉVELOPPEMENT DES APPLICATIONS WEB</h1>
            <p>Devenez un expert dans l'infonuagique</p>
            <button class="btn right">En savoir plus<i class='bx bxs-chevron-right-circle'></i></button>
        </div>
        <img src="{{asset('img/mesa.png')}}" alt="">
    </div>
 </section>

 <section class="sec-dprt1 m15">
    <div class ="dprt-tech scale-box">
        <div class="deprt-txt-img">
            <h1>CLOUD COMPUTING</h1>
            <p></p>
            <button class="btn right">En savoir plus<i class='bx bxs-chevron-right-circle'></i></button>
        </div>
        <img src="{{asset('img/mesa.png')}}" alt="">
    </div>
    <div class ="dprt-tech scale-box">
        <div class="deprt-txt-img">
            <h1>BIG DATA</h1>
            <p>Devenez un expert en big data</p>
            <button class="btn right">En savoir plus<i class='bx bxs-chevron-right-circle'></i></button>
        </div>
        <img src="{{asset('img/mesa.png')}}" alt="">
    </div>
 </section>
 <div class="btn-container cm-d">
    <button class="btn right">Faire votre demande d’admission<i class='bx bxs-chevron-right-circle'></i></button>
</div>

<div class="dep-text">
    <h1>DÉPARTEMENT DES 
        SCIENCES DE GESTION        
    </h1>
    <p>Le département des sciences de gestion offre deux (2) types de diplômes (Certificat BAC+1 et Licence BAC+3, Master BAC+5) en Entrepreneuriat, en Marketing et Licence en Science de gestion.</p>
</div>

<section class="tree-deprt">
    <div class="dpt3-ctn scale-box">
        <h1>SCIENCE DE GESTION</h1>
        <p>Devenez un expert dans la gestion d'une entreprise</p>
        <button class="btn right">En savoir plus<i class='bx bxs-chevron-right-circle'></i></button>
        <img src="{{asset('img/rect.png')}}" alt="" id="imgUn">
    </div>
    <div class="dpt3-ctn scale-box">
        <h1>ENTREPRENEURIAT</h1>
        <p>Devenez un expert dans la création des sociétés</p>
        <button class="btn right">En savoir plus<i class='bx bxs-chevron-right-circle'></i></button>
        <img src="{{asset('img/entre.png')}}" alt="">
    </div>
    <div class="dpt3-ctn scale-box">
        <h1>MARKETING</h1>
        <p>Devenez un expert dans la promotion des produits</p>
        <button class="btn right">En savoir plus<i class='bx bxs-chevron-right-circle'></i></button>
        <img src="{{asset('img/mark.png')}}" alt="">
    </div>
</section>

<section class="tree-deprt">
    <div class="dpt3-ctn scale-box">
        <h1>RESSOURCES HUMAINES</h1>
        <p>Devenez un expert dans la gestion des ressources humaines</p>
        <button class="btn right">En savoir plus<i class='bx bxs-chevron-right-circle'></i></button>
        <img src="{{asset('img/ressou.png')}}" alt="">
    </div>
    <div class="dpt3-ctn scale-box">
        <h1>COMPTABILITÉ</h1>
        <p>Devenez un expert comptable</p>
        <button class="btn right">En savoir plus<i class='bx bxs-chevron-right-circle'></i></button>
        <img src="{{asset('img/compta.png')}}" alt="">
    </div>
    <div class="dpt3-ctn scale-box">
        <h1>GESTION DE PROJETS</h1>
        <p>Devenez un expert dans la gestion de projets</p>
        <button class="btn right">En savoir plus<i class='bx bxs-chevron-right-circle'></i></button>
        <img src="{{asset('img/project.png')}}" alt="">
    </div>
</section>

@endsection
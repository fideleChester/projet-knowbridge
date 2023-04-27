@extends('base')
@section('title','Carrière | '.env('APP_NAME'))
@section('content')
<section class="carr-ctn">
    <div class='cont'>
        <h1>Carrières</h1>
        <button class="btn right">Voir les offres disponibles <i class='bx bxs-chevron-right-circle'></i></button>
        <p>Trouvez un emploi</p>
    </div>
</section>

<div class="dep-text carr">
    <h1>À KNOWBRIDGE, vous avez une place 
    </h1>
    <p>Nous savons que trouver un emploi significatif et gratifiant peut être un long voyage. Notre objectif est de rendre ce processus aussi simple que possible pour vous et de créer un environnement de travail satisfaisant - un environnement dans lequel vous aurez hâte de venir tous les jours. Commencez votre voyage avec nous en parcourant les emplois disponibles.</p>
</div>

<section class="ctn-emb">
<div class="carr-div-left">
    <h1>Embaucher des TRAVAILLEURS ETRANGERS</h1>
    <hr>
    <p>Avec ses 8 fillières dans les départements de technologies de l’information et sciences de gestion ,KBU est un important employeur dans le domaine de l’éducation. Professeurs, chargés de cours, personnel de soutien et d’administration s’y côtoient pour contribuer, chacun à sa façon, à la grande mission de l’Université. 
        Explorez les postes selon votre profil.</p>
        <a href="#">ça m’intérresse<i class='bx bxs-chevron-right-circle'></i></a>
</div>
<div class="carr-div-right">
    <img src="{{asset('img/teams3.png')}}" alt="">
</div>
</section>

<section class="ctn-emb">
    <div class="carr-div-left">
        <h1>révélez votre potentiel</h1>
        <hr>
        <p>Travailler à KBU, c’est faire partie 
            d’une famille où la passion, les idées 
            et l’innovation se côtoient au 
            quotidien. Mais avant tout, c’est 
            mettre son talent et ses 
            compétences au service d’une 
            mission plus grande que soi. </p>
            <a href="#">ça m’intérresse<i class='bx bxs-chevron-right-circle'></i></a>
    </div>
    <div class="carr-div-right">
        <img src="{{asset('img/teams3.png')}}" alt="">
    </div>
    </section>

 <section class="ctn-emb">
        <div class="carr-div-left">
            <h1>mobilité professionnelle</h1>
            <hr>
            <p>À KBU, notre philosophie est que le 
                développement de carrière est un 
                processus où les employés explorent, 
                planifient et créent de manière stratégique 
                leurs futurs parcours avec les commentaires 
                et les conseils de leurs responsables et les 
                informations et ressources de l'Université </p>
                <a href="#">ça m’intérresse<i class='bx bxs-chevron-right-circle'></i></a>
        </div>
        <div class="carr-div-right">
            <img src="{{asset('img/teams3.png')}}" alt="">
        </div>
        </section>
<div class="carr-temp">
    <div class="carr-img">
        <img src="{{asset('img/teams3.png')}}" alt="">
    </div>
<div class="carr2">
        <div class="carr-div-left carr3">
            <h1>Emploi temporaire</h1>
            <hr>
            <p>Intéressé par des opportunités d'emploi 
                flexibles? L'Université KNOWBRIDGE 
                propose des affectations de personnel 
                temporaires (contingents) et des postes à 
                durée déterminée ou à durée indéterminée</p>
                <a href="#">ça m’intérresse<i class='bx bxs-chevron-right-circle'></i></a>
        </div>
        <div class="carr-text">
            <h2>POURQUOI ENVISAGER UN ROLE TEMPORAIRE</h2>
            <ul>
                <span class="vertical-line"></span>
                <li>Vous avez besoin ou souhaitez de la flexibilité dans votre emploi du 
                    temps.
                    </li>
                <li> Passer le concours d’entrée et faire partir des 25 meilleurs**</li>
                <li>Vous êtes inspiré par la mission de KBU et aimez l'idée de travailler 
                    dans l'un des principaux établissements d'enseignement supérieur 
                    au monde.</li>
                <li>Vous souhaitez assumer un rôle basé sur un projet.</li>
                <li>Vous souhaitez réseauter et créer des liens à travers l'Université</li>
            </ul>
            
        </div>
    </div>
</div>


<style>
    .carr-ctn{
        background: url({{asset('img/ressou.png')}}) no-repeat center/cover ;
    }
</style>
@endsection
@extends('base')
@section('title','Accueil | '. env("APP_NAME")) 
@section('content')

<section class ="bgn">
    <div class="titre">
        <h1>
            Étudiez & travaillez<br> en même temps.
        </h1>
    </div>

    <div class="sous-titre">
        <p>
            Avec Knowbridge, étudies depuis chez toi et<br>puis obtient une formation diplômante et qualifiante<br>basée sur le système nord-américain. 
        </p>
    </div>

    <div class="btn-container">
		<button class="btn left"><i class='bx bxs-error-alt'></i> En savoir plus</button>
		<button class="btn right">Demande d'Admission <i class='bx bxs-chevron-right-circle'></i></button>
	</div>
</section>

<div class ="container-infos" >
    <h1>NOS PROGRAMMES: 
Conçus pour le succès</h1>
    <div class="prog b1" >
        <p>Nos programmes d’enseignement sont préparés par des professeurs chevronnés du Canada, des États-Unis et d’ailleurs. Tout sur nos programmes!</p>
        <a href="#">Continuer vers<i class='bx bxs-chevron-right-circle'></i></a>
    </div>
    <div class="imgs">
        <img src="{{ asset('img/converti.png') }}" alt="">
    </div>
</div>

<div class ="container-infos c2" >
    <h1 id="c">Le monde professionnel
À porter de main</h1>
    <div class="prog" >
        <p>Notre système universitaire t'intègre dans le monde professionnel dès ta première année.
Un travail et un stage t'attendent près de chez toi, au Canada et dans d'autres pays européens quasi assurément pendant et après tes études chez nous.</p>
        <a href="#">Continuer vers<i class='bx bxs-chevron-right-circle'></i></a>
    </div>
    <div class="imgs s1">
        <img src="{{ asset('img/teams.png') }}" alt="">
    </div>
</div>

<div class ="container-infos c2" >
    <h1 id="c">Étudie depuis chez toi et 
obtiens une formation
diplÔmante </h1>
    <div class="prog p1" >
        <p>Nous t'offrons la possibilité d'intégrer notre université virtuelle d'excellence de renommée internationale.
Nous y avons pensé et avons façonné la meilleure opportunité pour toi.
Avec Knowbridge, étudies depuis chez toi et obtient une formation diplômante basée sur le système nord-américain.</p>
        <a href="#">Continuer vers<i class='bx bxs-chevron-right-circle'></i></a>
    </div>
    <div class="imgs s1">
        <img src="{{ asset('img/teams1.png') }}" alt="">
    </div>
</div>
<style>
    .bgn{
        background: url({{ asset('img/ssd_01.png') }}) fixed;
    }
</style>
@endsection
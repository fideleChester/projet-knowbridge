@extends('base')
@section('title','Partenaire | '.env('APP_NAME'))

@section('content')

<section>
    <div class="titre h1-uni ctn-tech">
        <div class="ctn-tech-img">
            <img src="{{asset('img/lien.png')}}" alt="">
        </div>

        <h1>
            Technologie <br>de l’information</h1>
    </div>
</section>

<div class="ctn-universite1">
    <h1>DEVENEZ UN EXPERT EN TI </h1>
    <p>Dans ce monde de plus en plus numérique, les professionnels des TI sont essentiels au fonctionnement de toute
        entreprise dans tous les secteurs économiques. Le diplôme en technologie de l’information vous donne les
        compétences nécessaires pour une carrière dans diverses entreprises et organisations par la résolution, la
        soutenance, le dépannage, et la conception des outils technologiques au moyen des applications, des sites Web, de
        la programmation et des réseaux.</p>
</div>

<div class="ctn-tech-2-e">
    <div class="ctn-text">
        <h1>Qui peut être intéressé</h1>
        <p>Avez-vous ce qu’il faut pour réussir dans les TI ? Les qualités
            personnelles innées que vous possédez peuvent influencer votre
            succès dans le domaine des TI. Si vous êtes débrouillard, avez la
            capacité de communiquer, d’analyser, de rester organisé, et
            aimez aider les autres parmi tant d’autres compétences non
            techniques essentielles, vous vous distinguerez dans le domaine
            des technologies de l’information</p>
    </div>
    <div class="ctn-text ctn-text-img">
        <img src="{{asset('img/teams.png')}}" alt="">
    </div>
</div>
<div class="great-ctn-tech">
    <div class="sub-great-ctn-tech">
        <div class="ctn-text">
            <h1>Ce que vous apprenez</h1>
            <p>Ce programme développe chez l’étudiant des compétences
                techniques, personnelles et pratiques. Les sujets suivants sont
                abordés: la sécurité informatique, la gestion des données, la
                cybersécurité, le cloud computing et les systèmes d’exploitation.
                <br><br>


                En plus d'acquérir des compétences liées à votre domaine
                d'études, vous améliorerez des compétences générales comme la
                créativité, la gestion du temps, la communication et le travail
                d'équipe, qui vous aideront à exceller dans votre carrière, où
                qu'elle vous mène.</p>
        </div>
        <div class="ctn-text">
                <h1>Certifications Professionelles</h1>
                <p>Nos programmes en TI vous préparent pour des certifications
                professionnelles internationales exigées par les employeurs tels
                que CompTIA A+, Cisco CCNA, CompTIA Security+, CompTIA
                CySA+, CompTIA Linux+, Microsoft MD-100, Microsoft 70-740,
                Certified Threat Intelligence Analyst (CTIA), EC Council Certified
                Ethical Hacker (CEH), Certified Hacking Forensic Investigator
                (CHFI), etc.</p>
        </div>
    </div>
    <div class=" ctn-text-img1">
        <img src="{{asset('img/teams.png')}}" alt="">
    </div>
</div>

 <div class="ctn-text ctn-centre-text">
                <h1>Qui peut être intéressé</h1>
                <ul class="list list-marg">
                    <li>Avoir un baccalauréat scientifique (séries C, D ou E) avec une moyenne générale
                        supérieure ou égale à 12/20 ( OU 60 % dans un diplôme équivalent)
                        </li>
                    <li>Avoir une moyenne pondérée en mathématiques et en physique supérieure ou
                        égale à 13/20 ou 65%
                        </li>
                    <li>Avoir une moyenne pondérée en fran ç ais et anglais supérieur ou égale à 12/20
                        ou 60 %</li>
                </ul>
    </div>

    <div class="ctn-universite1">
        <h2>Quelles compétences allez - vous acquérir ?</h2>
    </div>


    <div class="all-in-tech">
        <div class="trait"></div>
        <img id="fl1"src="{{asset('img/fleche.svg')}}" alt="fleche">
        <div class="ctn-trois-text ctn-trois-text-before">
            <div class="ctn-tex">
                <h2>Gestion des risques</h2>
                <p>L'utilisation de processus, méthodes et outils
                    pour gérer les risques: identification, évaluation de quels risques devraient être
                    traités et la mise en oeuvre de stratégies pour faire
                    face à ces risques.
                </p>
            </div>
            <img src="{{asset('img/lineV.svg')}}" alt="vertical line">
            <div class="ctn-tex">
                <h2>Responsable de la sécurité
                    informatique</h2>
                <p>Assure la sécurité informatique, l'inspection et la protection des actifs
                    informationnels, la détection et la réaction aux menaces, ainsi
                    que l'examen des procédures à suivre avant et après un incident.
                </p>
            </div>
            <img src="{{asset('img/lineV.svg')}}" alt="vertical line">

            <div class="ctn-tex">
                <h2>Responsable de réseaux
                    et soutien technique</h2>
                <p>Prise en charge de la gestion d'un projet et de la planification de l'organisation
                    du travail, mise en place d'un plan d'action
                    sur une durée donnée, et gestion des imprévus
                </p>
            </div>
        </div>
        <div class="ctn-trois-text">
            <div class="ctn-tex">
                <h2>administration des systèmes</h2>
                <p>Administrer et assurer le bon fonctionnement des systèmes
                    et des applications au sein de l'entreprise
                    et dans le cloud
                </p>
            </div>
            <img src="{{asset('img/lineV.svg')}}" alt="vertical line">
            <div class="ctn-tex">
                <h2>analyse technologique</h2>
                <p>Faire l'analyse de différentes applications de la technologie de l'information
                     dans les arganisations, de leur utilisation et de leurs retombées.
                </p>
            </div>
            <img src="{{asset('img/lineV.svg')}}" alt="vertical line">

            <div class="ctn-tex">
                <h2>gestion de la technologie</h2>
                <p>Acquisition des méthodes, des stratégies et de l'expertise essentielles pour guider l'implantation dans les organisations.
                </p>
            </div>
        </div>
        <img id="fl2"src="{{asset('img/fleche.svg')}}" alt="fleche">
        <div class="trait2"></div>
    </div>

    <div class="btn-container cm-d">
        <button class="btn right">Demande d'Admission<i class='bx bxs-chevron-right-circle'></i></button>
    </div>

    <div class="dep-text">
        <p>Faites partie des professionnels les plus recherchés dans
            le monde numérique</p>
    </div>

    <div class="ctn-grid-tech">

        <div class="child-tech ">
            <div class="child-img">
                <img src="{{asset('img/profil.png')}}" alt="">
            </div>
                <h2>Administrateur de systèmes</h2>
        </div>

        <div class="child-tech">
            <div class="child-img">
                <img src="{{asset('img/direct-gene.png')}}" alt="">
            </div>
            <h2>Analyse en sécurité de l'information</h2>
        </div>

        <div class="child-tech">
            <div class="child-img">
                <img src="{{asset('img/ingener.png')}}" alt="">
            </div>
            <h2>Ingénieur en informatique dématérialisée</h2>
        </div>

        <div class="child-tech">
            <div class="child-img">
                <img src="{{asset('img/gestion-risk.png')}}" alt="">
            </div>
            <h2>Analyse du service d'assistance</h2>
        </div>

        <div class="child-tech">
            <div class="child-img">
                <img src="{{asset('img/profil.png')}}" alt="">
            </div>
            <h2>Administrateur de réseaux</h2>
        </div>

        <div class="child-tech">
            <div class="child-img">
                <img src="{{asset('img/conseiller.png')}}" alt="">
            </div>
            <h2>Conseiller en sécurité des TI</h2>
        </div>

        <div class="child-tech">
            <div class="child-img">
                <img src="{{asset('img/gestion.png')}}" alt="">
            </div>
            <h2>Spécialiste de la sécurité cloud</h2>
        </div>
        <div class="child-tech">
            <div class="child-img">
                <img src="{{asset('img/gestion.png')}}" alt="">
            </div>
            <h2>Technicien informatique</h2>
        </div>
    </div>

    <div class="ctn-universite1">
        <h1>liste des cours du programmes</h1>
    </div>

    <div class="ctn-crs-progm">
        <div class="ctn-crs1">
            <div>
                <p>
                    <h2>ANNÉE 1 : </h2>
                    <h3>Semestre 1 Cours</h3>
                </p>
            </div>

            <h3>credit</h3>

        </div>
        <div class="ctn-cours">
            <h2>OTP9 001- Outils technologiques et politiques universitaires</h2>
            <h2>jkjkjk</h2>
            <h2>kkkl</h2>
            <h2>mlml</h2>
            <h2></h2>
            <h2></h2>
        </div>
    </div>


@endsection

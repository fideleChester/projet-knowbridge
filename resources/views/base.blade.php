<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Required meta tags -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="public/aws/css/all.min.css" type="text/css">

        <title>@yield('title',env('APP_NAME'))</title>

    </head>
    <body>

    <section>

        <div class="container-fluid top-header">
            <div class="top-header-university float-start">
                Université virtuelle d'excellence
            </div>
            <div class="top-header-right-content float-end">
                <div class="">
                    Demande d'info
                </div> 
                <div class="">
                    Chat direct
                </div>
            </div>
        </div>

        <div class="navbar-box">
            <nav class="navbar navbar-expand-lg shadow-sm">
                <div class="container-fluid">

                    <a class="navbar-brand" href="#">
                        <div class="navbar-logo">
                            <img src="{{ asset('img/knowbridge.png') }}" alt="" srcset="">
                        </div>
                    </a>
                    
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                        <div class="navbar-nav">
                            <a class="nav-link" href="{{ asset('accueil') }}">Accueil</a>
                            <a class="nav-link" href="{{asset('programme')}}">Programmes</a>
                            <a class="nav-link" href="{{asset('admission')}}">Admission</a>
                            <a class="nav-link" href="{{asset('frais')}}">Frais</a>
                            <a class="nav-link" href="#">Bourses</a>
                            <a class="nav-link" href="#">Département</a>
                        </div>

                        <div class="navbar-right-content">

                            <button class="apply">Appliquer maintenant</button>

                            <div class="small-icons row">

                                <div class="col-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>
                                </div>

                                <div class="col-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                    </svg>
                                </div>

                                <div class="col-4">EN</div>

                            </div>
                        </div>

                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                </div>
            </nav>
        </div>
    </section>
    
    @yield('content')


    <footer>
            <div class="row r1">
                <div class="col">
                <div class="inputbox">
                    <input required="required" type="text">
                    <span>Nom</span>
                    <i></i>
                </div>
                </div>
                <div class="col">
                <div class="inputbox">
                    <input required="required" type="text">
                    <span>Prénom</span>
                    <i></i>
                </div>
                </div>
                <div class="col">
                <div class="inputbox">
                    <input required="required" type="text">
                    <span>Email</span>
                    <i></i>
                </div>
                </div>
                <div class="col">
                <div class="inputbox">
                    <input required="required" type="text">
                    <span>Téléphone</span>
                    <i></i>
                </div>              
                </div>
                <div class="col-12">
                <button> S'abonner</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('img/knowbridge2.png') }}" alt="Knwbridge">
                    <p>Devenez expert en Cybersécurité</br>aux métiers digital et bien d'autres.</p>
                    <ul style="list-style-type : none;">
                    <li><a href="#"><i class="fas fa-map-marker-alt me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i>300 BP 40 ,Sokodé,Togo</a></li>
                    <li><a href="#"><i class="fas fa-phone me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i>+1 613 908-5283 / +228 93 53 38 91</a></li>
                    <li><a href="#"><i class="fas fa-envelope me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i>contact@knowbridge.com</a></li>
                    </ul>

                    <a href="#"><i class="fab fa-telegram me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i></a>
                    <a href="#"><i class="fab fa-facebook me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i></a>
                    <a href="#"><i class="fab fa-instagram me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i></a>
                    <a href="#"><i class="fab fa-linkedin me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i></a>
                    <a href="#"><i class="fab fa-twitter me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i></a>
                    <a href="#"><i class="fab fa-youtube me-2 p-1 bg-white rounded-circle" style="color:#30110D;"></i></a>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="choisissez votre demande d'études" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <span class="input-group-text text-white" style="background-color: #30110D;">Appliquer maintenant</span>
                    </div>

                    
                </div>
                <div class="col-md-3">
                <h5>Étudiants actuels</h5>
                    <ul style="list-style-type: disc;">
                        <li><a href="#">Portail étudiant</a></li>
                        <li><a href="#">Horaire des cours</a></li>
                        <li><a href="#">Inscription au cours</a></li>
                        <li><a href="#">Outils technologiques</a></li>
                        <li><a href="#">Calendrier universitaire</a></li>
                        <li><a href="#">Stages et emplois</a></li>
                        <li><a href="#">Autre service</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                <h5>Futurs étudiants</h5>
                    <ul style="list-style-type: disc;">
                        <li><a href="#">Profil étudiant</a></li>
                        <li><a href="#">Programmes</a></li>
                        <li><a href="#">Admission</a></li>
                        <li><a href="#">Frais</a></li>
                        <li><a href="#">Bourses</a></li>
                        <li><a href="#">Départements</a></li>
                        <li><a href="#">Notre université</a></li>
                        <li><a href="#">Orientation universitaire</a></li>

                    </ul>
                </div>
                <div class="col-md-3">
                <h5>Liens utiles</h5>
                <ul style="list-style-type: disc;">
                        <li><a href="#">Portail professeurs </a></li>
                        <li><a href="#">Carrières</a></li>
                        <li><a href="#">Nos partenaires</a></li>
                        <li><a href="#">Embaucher un étudiant</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Nous joindre</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-2">
                    <p>KNOWBRIDGE UNIVERSITY INSTITUTE</p>
                    <h6>Système universitaire nord-américain</h6>          
                </div>
                <div class="col-md-2" style="border-left: 1px solid #000;">
                <p>Protection de la vie privée</p>
                </div>
                <div class="col-md-2" style="border-left: 1px solid #000;">
                <p>&copy; 2022 Tous droits réservés</p>
                </div>
                <div class="col-md-2" style="border-left: 1px solid #000;">
                <p>Accessibilité</p>
                </div>
                <div class="col-md-2" style="border-left: 1px solid #000;">
                <p>Politiques universitaires</p>
                </div>
            </div>
    </footer>
        
    </body>
</html>

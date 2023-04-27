@extends('base')
@section('title','Frais | '.env("APP_NAME"))
@section('content')
<section>
    <div class="bgn">
        <div class="titre">
            <h1>Frais de Scolarité</h1>
        </div>
        <div class="ctn-frais">
            <img src="{{asset('img/frais.png')}}" alt="">
        </div>
    </div>
</section>

<div class="ctn-sco">
    <p id="esti">Estimation des frais de scolarité</p>
    <table>
        <thead>
            <tr>
                <th>Diplôme</th>
                <th>Frais d'admission</th>
                <th>Frais administratifs</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Licence</td>
                <td>30 000 FR CFA</td>
                <td>50 000 FR CFA</td>
            </tr>
            <tr>
                <td>Master</td>
                <td>60 000 FR CFA</td>
                <td>100 000 FR CFA</td>
            </tr>
        </tbody>
    </table>
    <p><strong>NB:</strong> Les bourses ne prennent pas en charge ces différents frais</p>
    <ul class = "elt-p">
        <li>Les frais d'admission se paie une seule fois pour l'analyse des dossiers</li>
        <li>Les frais administratif se paie une fois par année.</li>
    </ul>
    <p class="head">1. Frais de scolarité annuel pour Étudiant régulier</p>
    <table class="tble">
        <thead>
            <tr>
                <td><span>Diplôme</span></td>
                <td><span><br>Technologie de l'information</span><br><br>

                    <span>Cybersécurité</span><br><br>

                    <span>Réseau et télécommunication</span><br><br>

                    <span>Développement d'application web</span><br><br>
                </td>
                <td><span><br>Science de gestion</span><br><br>

                    <span>Entrepreneuriat</span><br><br>

                    <span>Marketing</span><br><br>
                    
                    <span>Ressources humaines</span><br><br></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Certificat</td>
                <td>1.800.000 FR CFA</td>
                <td>1.500.000 FR CFA</td>
            </tr>
            <tr>
                <td>Licence</td>
                <td>1.800.000 FR CFA</td>
                <td>1.500.000 FR CFA</td>
            </tr>
            <tr>
                <td>Master</td>
                <td>2.400.000 FR CFA</td>
                <td>2.100.000 FR CFA</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="ctn-table">
    <h1>     Frais de scolarité pour les programmes du département des technologie de l’information</h1>
    <table>
        <thead>
            <tr>
                <th id="none"></th>
                <th>Frais d'admission</th>
                <th>Frais administratif</th>
                <th>1èr <br> tranche</th>
                <th>2e <br> tranche</th>
                <th>3e <br> tranche</th>
                <th>4e <br> tranche</th>
                <th>5e <br> tranche</th>
                <th>6e <br> tranche</th>
                <th id="none">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td>1er septembre</td>
                <td>1er septembre</td>
                <td>1er octobre</td>
                <td>1er novembre</td>
                <td>1er janvier</td>
                <td>1er février</td>
                <td>1er mars</td>
                <td></td>
        </tr>

        <tr>
            <td>Licence 1</td>
            <td>30 000F</td>
            <td>50 000F</td>
            <td>400 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>200 000F</td>
            <td>1880 000F</td>
        </tr>

        <tr>
            <td>Licence 2</td>
            <td>0F</td>
            <td>50 000F</td>
            <td>400 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>200 000F</td>
            <td>1850 000F</td>
        </tr>

        <tr>
            <td>Licence 3</td>
            <td>0F</td>
            <td>50 000F</td>
            <td>400 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>200 000F</td>
            <td>1850 000F</td>
        </tr>

        <tr>
            <td>Master 1</td>
            <td>60 000F</td>
            <td>100 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>2560 000F</td>
        </tr>
        <tr>
            <td>Master 2</td>
            <td>0F</td>
            <td>100 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>2500 000F</td>
        </tr>
        </tbody>
    </table>

    <h1 class="mg-top"> Frais de scolarité pour les programmes du département des sciences de gestion</h1>
    <table>
        <thead>
            <tr>
                <th id="none"></th>
                <th>Frais d'admission</th>
                <th>Frais administratif</th>
                <th>1èr <br> tranche</th>
                <th>2e <br> tranche</th>
                <th>3e <br> tranche</th>
                <th>4e <br> tranche</th>
                <th>5e <br> tranche</th>
                <th>6e <br> tranche</th>
                <th id="none">Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td>1er septembre</td>
                <td>1er septembre</td>
                <td>1er octobre</td>
                <td>1er novembre</td>
                <td>1er janvier</td>
                <td>1er février</td>
                <td>1er mars</td>
                <td></td>
        </tr>

        <tr>
            <td>Licence 1</td>
            <td>30 000F</td>
            <td>50 000F</td>
            <td>400 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>200 000F</td>
            <td>1880 000F</td>
        </tr>

        <tr>
            <td>Licence 2</td>
            <td>0F</td>
            <td>50 000F</td>
            <td>400 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>200 000F</td>
            <td>1850 000F</td>
        </tr>

        <tr>
            <td>Licence 3</td>
            <td>0F</td>
            <td>50 000F</td>
            <td>400 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>300 000F</td>
            <td>200 000F</td>
            <td>1850 000F</td>
        </tr>

        <tr>
            <td>Master 1</td>
            <td>60 000F</td>
            <td>100 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>2560 000F</td>
        </tr>
        <tr>
            <td>Master 2</td>
            <td>0F</td>
            <td>100 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>350 000F</td>
            <td>2500 000F</td>
        </tr>
        </tbody>
    </table>
</div>

@endsection
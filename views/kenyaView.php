<?php
  include("template/header.php")
 ?>

<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-border-bottom">
  <div class="fixed-top" style="background-color: white;">
  <a href="index.php" class="w3-bar-item"><img src="../assets/img/logo.png" alt="logo" style="width: 60px;"></a>
  <nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pays
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Afrique du Sud</a>
            <a class="dropdown-item" href="#">Côte d'Ivoire</a>
            <a class="dropdown-item" href="#">Kenya</a>
            <a class="dropdown-item" href="#">Mali</a>
            <a class="dropdown-item" href="#">Sénégal</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Safaris
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Afrique du Sud</a>
            <a class="dropdown-item" href="#">Kenya</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hôtels et Lodges
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Afrique du Sud</a>
            <a class="dropdown-item" href="#">Côte d'Ivoire</a>
            <a class="dropdown-item" href="#">Kenya</a>
            <a class="dropdown-item" href="#">Mali</a>
            <a class="dropdown-item" href="#">Sénégal</a>
          </div>
        </li>    
        <li class="nav-item">
          <a class="nav-link" href="#">Noces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Parcs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</div>

<!-- header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="../assets/img/kenya2.jpeg" alt="London" width="1500" height="700"> 
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-transparent" style="color: floralwhite;">
      <h3>Kenya (Afrique de l'Est)</h3>
      <p><a href="index.php">ACCUEIL</a> / DESTINATIONS / KENYA (AFRIQUE DE L'EST)</p>
    </div>
    <!-- Tabs -->
    <div id="Flight" class="w3-display-middle w3-container w3-white w3-padding-16 myLink" style="width:65%">
       
    </div>
  </div>  
</header>

<div class="row col-10 mx-auto p-0 mt-4 card-deck">
  <div class="col mt-3">
      <p class="mt-4 brown sous_titre" style="text-align: center;"><strong>Le Kenya (Afrique de l’Est) est le paradis des chasseurs d’images.</strong><br></p>
      <p class="text-center">Equipé d’un bon appareil photographique, le visiteur sera comblé par une faune abondante.</p>
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-4 -webkit-inline-box text-center">
      <img src="../assets/img/logoKenya.png" class="img-fluid cercle card-img-top zoom" style="width: 50%;" alt="Responsive image">
  </div> 
</div>

<div class="card-deck">
  <div class="mx-auto col-10 mt-4 d-block">
    <p class="brown text-center sous_titre">Le Kenya (Afrique de l’Est) est baigné par l’océan Indien et bordé au Nord par le Soudan et l’Éthiopie, à l’Est par la Somalie et au Sud par la Tanzanie.</strong><br></p>
  </div>
  <div class="mx-auto col-10 mt-4 d-block">
    <p class="text-center">« Berceau du monde », le Kenya est le plus merveilleux théâtre de la vie sauvage sur terre. Cette extraordinaire « arche de Noé » abrite la plus forte concentration d’espèces animales différentes au monde et offre une intimité avec la nature unique. Les « Big Five » (lion, léopard, rhinocéros, éléphant et buffle) y sont les rois et cohabitent avec les plus rares espèces du monde animal.
        Les fantastiques paysages, nés de la préhistoire, sont leurs terrains de jeu : les sava­nes, les lacs, les forêts, les montagnes, les volcans, les grottes et d’immenses plages de sable blanc sont la toile de fond idéale à de magnifiques souvenirs…
        Sur ces terres vivent aussi de nombreuses ethnies à la culture préservée du monde moderne. L’accueil des Kenyans est réputé comme l’un des meilleurs au monde. Le sourire est sur tous les visages et partout le visiteur est le bienvenu.
        Mais le Kenya, ce n’est pas seulement les safaris “Out of Africa” mais également les plages tropicales ou les trekkings … Les Masaïs contribuent au caractère exotique du tourisme dans cette superbe destination de l’ Afrique de l’Est.
    </p>
  </div>
</div>

<ul id="listForKenya" class="col-12 text-center thead-light list-unstyled list-inline bg-light p-3 mb-0">
  <li class="list-inline-item"><a id="GalerieList" href="#listForKenya">Galerie</a></li>
  <li class="list-inline-item"><a id="LekenyaList" href="#listForKenya">Pays</a></li>
  <li class="list-inline-item"><a id="SanteList" href="#listForKenya">Santé</a></li>
  <li class="list-inline-item"><a id="FormalitesList" href="#listForKenya">Formalités</a></li>
  <li class="list-inline-item"><a id="VideoList" href="#listForKenya">Vidéo</a></li>
</ul>
<table class="col-12 mt-4">
    <tr class="col-12">
      <td class="col-12" id="galerie">
            <div class="col-12">
                <div class="col-9 mx-auto" id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../assets/img/kenya3.jpg" alt="First slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/kenya4.jpg" alt="Second slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/kenya5.jpg" alt="Third slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/kenya5.jpg" alt="Third slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/kenya6.jpg" alt="Third slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/kenya7.jpg" alt="Third slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/kenya8.jpg" alt="Third slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/kenya9.jpg" alt="Third slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/kenya10.jpg" alt="Third slide" width="800" height="400">
                  </div>
                </div>
              </div>
            </div>
      </td>
      <td class="col-12" id="lekenya">
            <div class="col-10 mx-auto">    
                <h3 class="brown"><strong>Carte d’identité du Kenya :</strong></h3>
                <p style="text-align: justify">République<br>
                <strong>Langues officielles :</strong> Anglais, Swahili.<br>
                <strong>Capitale :</strong> Nairobi<br>
                <strong>Principales villes :</strong> Nairobi, Mombasa, Kisumu<br>
                <strong>Superficie : </strong>580 367 km²<br>
                <strong>Fuseau horaire :</strong> UTC +3<br>
                <strong>Population :</strong> 41 800 000 habitants (2014)<br>
                <strong>Religion :</strong> Les musulmans (10%) se trouvent surtout sur la côte kenyane. Ailleurs, on compte environ 78% de chrétiens et 12% d’hindouistes et d’animistes.<br>
                <strong>Monnaie :</strong> Shilling kényan (KES), il faut compter environ 100 shillings pour 1 euro selon le cours du change.<br>
                <strong>Vol :</strong> Au départ de Paris, il faut 9h de vol pour arriver au Kenya.<br>
                <strong>Sites inscrits au Patrimoine de l’Unesco :</strong> Parc national du Mont Kenya, Parc national du Lac Turkana et la vieille ville de Lamu.<br>
                <strong>Téléphone :</strong> Pour appeler au Kenya depuis l’Europe composez le 00254 + le numéro de téléphone. Pour joindre la France depuis le Kenya composez le 0033 + le numéro de téléphone.<br>
                <strong>Décalage horaire :</strong> + 1heure en été ; + 2 heures en hiver.<br>
                <strong>Electricité :</strong> Le voltage est 220V / 50 Hz. Il est préférable d’emmener son propre adaptateur car les prises sont de type anglais et certains lodges n’en fournissent pas.</p>     
            </div>
      </td>
      <td class="col-12" id="formalites">
             <div class="col-10 mx-auto">      
                <h3 class="brown"><strong>Carte d’identité du Kenya :</strong></h3>
                <p style="text-align: justify">République<br>
                <strong>Langues officielles :</strong> Anglais, Swahili.<br>
                <strong>Capitale :</strong> Nairobi<br>
                <strong>Principales villes :</strong> Nairobi, Mombasa, Kisumu<br>
                <strong>Superficie : </strong>580 367 km²<br>
                <strong>Fuseau horaire :</strong> UTC +3<br>
                <strong>Population :</strong> 41 800 000 habitants (2014)<br>
                <strong>Religion :</strong> Les musulmans (10%) se trouvent surtout sur la côte kenyane. Ailleurs, on compte environ 78% de chrétiens et 12% d’hindouistes et d’animistes.<br>
                <strong>Monnaie :</strong> Shilling kényan (KES), il faut compter environ 100 shillings pour 1 euro selon le cours du change.<br>
                <strong>Vol :</strong> Au départ de Paris, il faut 9h de vol pour arriver au Kenya.<br>
                <strong>Sites inscrits au Patrimoine de l’Unesco :</strong> Parc national du Mont Kenya, Parc national du Lac Turkana et la vieille ville de Lamu.<br>
                <strong>Téléphone :</strong> Pour appeler au Kenya depuis l’Europe composez le 00254 + le numéro de téléphone. Pour joindre la France depuis le Kenya composez le 0033 + le numéro de téléphone.<br>
                <strong>Décalage horaire :</strong> + 1heure en été ; + 2 heures en hiver.<br>
                <strong>Electricité :</strong> Le voltage est 220V / 50 Hz. Il est préférable d’emmener son propre adaptateur car les prises sont de type anglais et certains lodges n’en fournissent pas.</p>              
            </div>
      </td>
      <td class="col-12" id="sante">
             <div class="col-10 mx-auto">      
                <h3 class="brown"><strong>Conseils Santé :</strong></h3>
                <p style="text-align: justify"> Avant votre départ, consultez votre médecin et souscrivez un contrat auprès d’une compagnie d’assistance couvrant les frais médicaux et le rapatriement sanitaire.</p>
                <ul>
                  <li style="text-align: justify"><strong><em>Paludisme</em></strong><br>
                  Maladie transmise par les piqûres de moustiques qui nécessite des mesures de protection (sprays, crèmes, diffuseurs électriques, moustiquaires…). Consultez votre médecin traitant pour vous faire éventuellement prescrire un traitement médicamenteux préventif. Classification : zone 3</li>
                  <li style="text-align: justify"><strong><em>VIH-Sida</em></strong><br>
                  Prévalence importante du VIH –Sida. Mesures de précaution fortement recommandées.</li>
                  <li style="text-align: justify"><em><strong>Vaccinations</strong><br>
                  </em>– Fièvre jaune : Vaccination conseillée avant le départ et obligatoire en cas de séjour préalable dans certains pays d’Afrique ou d’Amérique du Sud.<br>
                  1 injection à faire au minimum 10 jours avant le départ, validité de 10 ans. Enfants à partir de l’âge de 9 mois<br>
                  – Autres vaccinations : La mise à jour de la vaccination diphtérie-tétanos-poliomyélite est nécessaire.<br>
                  – Vaccinations conseillées (selon conditions d’hygiène et durée du séjour) : fièvre typhoïde, hépatites virales A et B.</li>
                  <li style="text-align: justify"><em><strong>Hygiène alimentaire</strong><br>
                  </em>Prévention de la diarrhée du voyageur et du choléra :<br>
                  – Ne pas boire l’eau du robinet.<br>
                  – Évitez l’ingestion de glaçons, de jus de fruits frais, de légumes crus et de fruits non pelés.<br>
                  – Évitez la consommation d’aliments (poisson, viande, volaille, lait) insuffisamment cuits.<br>
                  – Abstenez-vous de tout achat de nourriture dans les rues.<br>
                  – Veillez à un lavage régulier et soigneux des mains avant chaque repas.</li>
                </ul>  
            </div>
      </td>
      <td class="col-12" id="video">
            <div class="col-10 text-center mx-auto">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/gTEXJsw62iU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
      </td>
    </tr>
  </tbody>
</table>
  
<div class="col-10 mx-auto mt-4">
  <hr>
	<h3 class="brown"><strong>A ne pas manquer au Kenya (Afrique de l’Est) :</strong></h3>
  <ul>
    <li>Rencontrez les Masaïs.</li>
    <li>Partez à la recherche des espèces rares et menacées comme l’oryx beisa, les zèbres de Grévy.</li>
    <li>Contemplez ces immenses paysages africains, dominés par l’emblématique mont Kenya.</li>
  </ul>
</div>



</body>

 <?php
   include("template/footer.php")
  ?>
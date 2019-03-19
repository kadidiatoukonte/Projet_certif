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

<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="../assets/img/ci2.jpg" alt="" width="1500" height="700"> 
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-transparent" style="color: floralwhite;">
      <h3>Côte d'Ivoire</h3>
      <p><a href="index.php">ACCUEIL</a> / DESTINATIONS / Côte d'Ivoire</p>
    </div>
  </div>  
</header>

<div class="row col-10 mx-auto p-0 mt-4 card-deck">
  <div class="col">
      <p class="brown sous_titre" style="text-align: center;"><strong>La Côte d’Ivoire, en forme longue république de Côte d’Ivoire, est un pays membre de l’Union africaine.</strong><br></p>
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-4 -webkit-inline-box text-center">
      <img src="../assets/img/ciLogo.png" class="img-fluid cercle card-img-top zoom" style="width: 50%;" alt="Responsive image">
  </div> 
</div>

<div class="card-deck">
  <div class="mx-auto col-10 mt-4 d-block">
    <p class="text-center">La Côte d'Ivoire est un pays d'Afrique de l'Ouest doté de stations balnéaires, de forêts tropicales et d'un patrimoine
        colonial français. Abidjan, sur la côte Atlantique, est le principal centre urbain du pays. Ses sites modernes regroupent la Pyramide, un
        édifice en béton faisant penser à une ziggourat. La cathédrale Saint-Paul est une structure inclinée rattachée à une immense croix. Au nord
        du quartier central des affaires, le parc national du Banco est une réserve de forêt tropicale au sein de laquelle serpentent des chemins de randonnée.
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
                    <img class="d-block w-100" src="../assets/img/ci7.jpeg" alt="First slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/ci3.jpeg" alt="Second slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/ci4.jpeg" alt="Third slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/ci5.jpeg" alt="Third slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/ci6.jpeg" alt="Third slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/ci8.jpeg" alt="Third slide" width="800" height="400">
                  </div>
                </div>
              </div>
            </div>
      </td>
      <td class="col-12" id="lekenya">
        <div class="col-10 mx-auto"> 
            <h3>Voyage Côte d'Ivoire</h3>
            <p>
                Vue d'avion, la Côte d'Ivoire, c'est un peu comme la palette du peintre : une grosse touche de vert écolo pour représenter
                la densité de la forêt, un filet de blanc pour son cordon littoral, des mèches de jaune paille pour les savanes mandé et sénoufo,
                un soupçon de brun pour les reliefs, des rubans d'ocre pour les voies de latérite ou de gris pour le bitume, du bleu pour ses lacs...
                La Côte d'Ivoire révèle une multitude de couleurs rivalisant de vivacité.
                Vue d'en bas, la Côte d'Ivoire nous frappe violemment par ses contrastes socioculturels, économiques et architecturaux. Entre l'hyper
                modernisme, voire le futurisme de certains quartiers d'Abidjan, le néo-classicisme de Yamoussoukro et l'habitat traditionnel des villages
                reculés, comme ceux des Pays yacouba de la région de Man, ou sénoufo du côté de Korhogo, il y a un gouffre !
                En Côte d'Ivoire, chacun peut trouver matière à satisfaire ses centres d'intérêt : farniente, pêche, paysages photogéniques et découvertes
                ethnologiques, artisanales ou agricoles...
            </p>
		</div>
      </td>
      <td class="col-12" id="formalites">
            <div class="col-10 mx-auto">
                <section class="bref">
                    <h3>L'essentiel</h3>
                    <p style="">
                        - <em><strong>Papiers :</strong></em> passeport valable 6 mois après la date de retour et visa biométrique.<br>
                        - <em><strong>Vaccin obligatoire :</strong></em> fièvre jaune (carnet de vaccinations demandé).<br>
                        - <em><strong>Vaccins conseillés :</strong></em> vaccins universels, ROR, hépatite A et typhoïde, méningite à 
                        Haemophilus influenzae b, traitement antipaludique ; éventuellement rage, méningites à méningocoque A et C.<br>
                        - <em><strong>Meilleure saison :</strong></em> de décembre à mars (saison sèche).<br>
                        - <em><strong>Durée de vol direct :</strong></em> 6h30 pour Abidjan.<br>
                        -<em><strong> Décalage horaire :</strong></em> - 2h l’été, - 1h l’hiver.
                    </p>    
                </section>
            </div>
      </td>
      <td class="col-12" id="sante">
            <div class="col-10 mx-auto">
                <h3>La fièvre jaune : vaccination obligatoire</h3>
                <p>La vaccination contre la fièvre jaune, maladie mortelle que l’on attrape sans s’en apercevoir, transmise par les moustiques, est un passage obligatoire avant de partir en Afrique intertropicale.
                    La vaccination contre la fièvre jaune est indispensable dès l’âge de 6 ou 9 mois, même lorsqu’elle n’est pas administrativement exigée. Elle protège à 100 % pendant au moins 10 ans.
                    Bien noter les points suivants.
                    - Cette vaccination ne peut se faire que dans les centres de vaccination habilités (il y en a plus d’une centaine en France). Pour connaître votre centre le plus proche, renseignez-vous auprès de votre médecin traitant.
                    - La protection est conférée seulement 10 jours après l'injection (sauf en cas de rappel : protection immédiate). Il est donc nécessaire de s’y prendre à l’avance.
                    - Le carnet de vaccinations est demandé.
                </p>           
            </div>
      </td>
      <td class="col-12" id="video">
            <div class="col-10 text-center mx-auto">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_VrWeJov7jM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
      </td>
    </tr>
  </tbody>
</table>

<div class="col-10 mx-auto mt-4">
    <hr>
    <p><strong><a href="#">Les hôtels et lodges en Côte d'Ivoire</a></strong></p>
    <p>Pour plus de renseignements concernant la Côte d'Ivoire, consulter <a title="#" href="#" target="_blank">coteIvoire-online.com</a></p>
</div>

</body>

 <?php
   include("template/footer.php")
  ?>
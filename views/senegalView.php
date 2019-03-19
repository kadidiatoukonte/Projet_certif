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
  <img class="w3-image" src="../assets/img/senegal2.jpg" alt="" width="1500" height="700"> 
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-transparent" style="color: floralwhite;">
      <h3>Sénégal</h3>
      <p><a href="index.php">ACCUEIL</a> / DESTINATIONS / Sénégal</p>
    </div>
  </div>  
</header>

<div class="row col-10 mx-auto p-0 mt-4 card-deck">
  <div class="col">
      <p class="brown sous_titre" style="text-align: center;"><strong>Le Sénégal, surnommé “le pays de la Teranga” (hospitalité) présente de nombreux avantages aux touristes européens, et particulièrement francophones :</strong><br></p>
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-4 -webkit-inline-box text-center">
      <img src="../assets/img/senegalLogo.png" class="img-fluid cercle card-img-top zoom" style="width: 50%;" alt="Responsive image">
  </div> 
</div>

<div class="card-deck">
  <div class="mx-auto col-10 mt-4 d-block">
    <p class="text-center">proximité (5h30 d’avion depuis Paris), plus de 300 jours de soleil par an, population francophone et francophile, très faible décalage horaire 
        (1 ou 2 h selon la saison), stabilité politique, tolérance, monnaie indexée sur l’euro (Franc CFA), une façade maritime, des parcs nationaux, une grande richesse culturelle, un passé intime avec la France depuis 4 siècles ….
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
                    <img class="d-block w-100" src="../assets/img/senegal2.jpeg" alt="First slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/senegal3.jpeg" alt="Second slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/senegal4.jpeg" alt="Third slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/senegal5.jpeg" alt="Third slide" width="800" height="400">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/senegal6.jpg" alt="Third slide" width="800" height="400">
                  </div>
                </div>
              </div>
            </div>
      </td>
      <td class="col-12" id="lekenya">
        <div class="col-10 mx-auto"> 
			<h3>Carte d’identité du Sénégal</h3>
            <p style="text-align: justify;">République semi-présidentielle<br>
            <strong>Langue officielle</strong> : Français<br>
            <strong>Capitale :</strong> Dakar<br>
            <strong>Superficie :</strong> 196 722 km²<br>
            <strong>Fuseau horaire :</strong> UTC<br>
            <strong>Population :</strong> 12 873 6012 habitants (2013)<br>
            <strong>Monnaie :</strong> Franc CFA (XOF)<br>
            <strong>Indicatif téléphonique :</strong> +221</p>
		</div>
      </td>
      <td class="col-12" id="formalites">
            <div class="col-10 mx-auto">
                <h3>Formalités d’entrée au Sénégal</h3>
                <p>Plus de visa d’entrée au Sénégal pour les touristes depuis le 1 mai 2015.</p>
                <p style="text-align: justify;"><strong><em>Ambassade du Sénégal en France :</em></strong><br>
                14, avenue Robert Schuman – 75007 Paris<br>
                Tél. : 01 47 05 39 45<br>
                repsen@wanadoo.fr<br>
                http://www.ambasseneparis.com</p>
            </div>
      </td>
      <td class="col-12" id="sante">
            <div class="col-10 mx-auto">
                <h3>Santé</h3>
                <p style="text-align: justify;">En cas de déplacement, toute détention de médicaments inscrits au tableau, en particulier les hypnotiques et les antidépresseurs doit pouvoir être justifiée par une ordonnance, sous peine de se voir accusé de détention de produit stupéfiant.</p>
                <p><strong>Epidémie Ebola :</strong><br>
                Le 17 octobre 2014, l’Organisation mondiale de la santé (OMS) a annoncé la fin de l’épidémie Ebola au Sénégal, où le seul cas déclaré a évolué vers une guérison complète, au mois de septembre dernier.</p>
                <p><strong>Paludisme</strong> : Le paludisme est une maladie transmise par les piqûres de moustiques qui impose le recours à des mesures de protection individuelle (sprays, crèmes, diffuseurs électriques, moustiquaires imprégnés, etc.). A ces mesures, doit s’ajouter un traitement médicamenteux prophylactique adapté à chaque individu : il convient de s’adresser à un centre de conseils aux voyageurs avant le départ. Au Sénégal, le risque de paludisme existe toute l’année dans le pays.</p>
                <p><strong>Fièvre jaune : </strong>Le vaccin contre la fièvre jaune n’est plus obligatoire pour entrer au Sénégal toutefois il est très fortement recommandé d’être à jour de la vaccination contre la fièvre jaune, qui a un effet protecteur pendant 10 ans.</p>
                <p><strong>Poliomyélite :</strong> Veillez à être à jour de votre vaccination.</p>
                <p><strong>Maladies sexuellement transmissibles :</strong> Prévalence significative des maladies sexuellement transmissibles (hépatite B, VIH-Sida, syphilis).</p>
                <p><em><strong>Précautions d’usage :</strong></em></p>
                <p><strong>Vaccinations : </strong>Les vaccins contre le tétanos, la poliomyélite, la diphtérie, la méningococcie, la fièvre typhoïde, l’hépatite A et l’hépatite B sont recommandés.<br>
                Il est recommandé de consulter votre médecin traitant ou un centre de conseils aux voyageurs avant le départ et contracter une assurance de rapatriement sanitaire.</p>
            </div>
      </td>
      <td class="col-12" id="video">
            <div class="col-10 text-center mx-auto">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/a1RZ3TjLp7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
      </td>
    </tr>
  </tbody>
</table>

<div class="col-10 mx-auto mt-4">
    <hr>
    <p><strong><a href="#">Les hôtels et lodges au Sénégal</a></strong></p>
    <p>Pour plus de renseignements concernant le Sénégal, consulter <a title="#" href="http://www.senegal-online.com" target="_blank">senegal-online.com</a></p>
</div>

</body>

 <?php
   include("template/footer.php")
  ?>
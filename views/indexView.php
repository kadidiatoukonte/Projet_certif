<?php
  include("template/header.php");
  include("template/navbar.php")
 ?>

<body class="w3-light-grey">

<!-- Header -->
<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
<div class="w3-content w3-section w3-display-container" style="max-width:1500px">
  <img class="mySlides w3-image" src="../assets/img/backgroundImg.jpg" alt="Belafrica" width="1500" height="700">
  <img class="mySlides w3-image" src="../assets/img/backg2.jpg" alt="Belafrica" width="1500" height="700">
  <img class="mySlides w3-image" src="../assets/img/backg3.jpg" alt="Belafrica" width="1500" height="700">
  <img class="mySlides w3-image" src="../assets/img/backg4.jpg" alt="Belafrica" width="1500" height="700">
  <img class="mySlides w3-image" src="../assets/img/backg5.jpg" alt="Belafrica" width="1500" height="700">
  <img class="mySlides w3-image" src="../assets/img/backg6.jpg" alt="Belafrica" width="1500" height="700">
  <img class="mySlides w3-image" src="../assets/img/backg7.jpg" alt="Belafrica" width="1500" height="700">
  <img class="mySlides w3-image" src="../assets/img/backg8.jpg" alt="Belafrica" width="1500" height="700">
</div>
  
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px;">

  <!-- Good offers -->
  <div class="w3-container w3-margin-top">
    <h3 class="mt-3 brown" style="text-align: center;">Afrique tourisme : safaris, vacances en Afrique,
    redécouvrez l’authenticité …</h3>
  </div>
  <hr class="mt-4">

  <h4 class="mt-3" style="text-align: center;">VOUS N’AVEZ PAS TROUVÉ LES VACANCES QUE VOUS AVIEZ IMAGINÉES ?
     NOUS ALLONS LES CRÉER ENSEMBLE</h4>
  <div class="w3-row-padding w3-text-white w3-large mt-5 ">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img class="zoom" src="../assets/img/mali1.jpg" alt="Mali" style="width:100%">
        <span class="w3-display-bottomleft w3-padding">Mali</span>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img class="zoom" src="../assets/img/as1.jpg" alt="Afrique du Sud" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Afrique du Sud</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img class="zoom" src="../assets/img/ci1.jpg" alt="Côte d'Ivoire" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Côte d'ivoire</span>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img class="zoom" src="../assets/img/kenya1.jpg" alt="Kenya" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Kenya</span>
          </div>
        </div>
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img class="zoom" src="../assets/img/senegal1.jpeg" alt="Sénégal" style="width:100%">
            <span class="w3-display-bottomleft w3-padding">Sénégal</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr class="mt-4">

<div class="row card-deck mt-5">
      <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-3 -webkit-inline-box">
           <img src="../assets/img/safari1.jpg" class="img-fluid cercle card-img-top zoom" alt="Responsive image">
      </div>
      <div class="col mt-3">
        <p class="mt-4 brown sous_titre" style="text-align: center;"><strong>Safari</strong><br></p>
        <p class="mt-4 para">  “Safari” est un mot swahili signifiant « long voyage » qui désigne habituellement une excursion touristique à caractère sportif. Un safari en Afrique était à l'origine une 
           expédition d'exploration. Puis, le mot désigna les voyages de chasse au grand gibier en Afrique.</p><br>
      </div>
    </div>
    <div class="row">
    <div class="col mt-4">
        <p class="mt-4 brown sous_titre" style="text-align: center;"><strong>Parc Nationaux en Afrique</strong><br></p>
        <p class="para">  Les parcs nationaux en Afrique ont vocation de protéger la faune, la flore et, plus généralement, le biotope des conséquences négatives des activités humaines.
            Les parcs nationaux ont également un rôle économique important pour les différents pays africains compte tenu de l’intérêt touristique qu’ils présentent.
        </p>
      </div>
      <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-4 -webkit-inline-box">
           <img src="../assets/img/parc1.jpg" class="img-fluid cercle card-img-top zoom" alt="Responsive image">
      </div> 
    </div>
    <div class="row">
      <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-4 -webkit-inline-box">
           <img src="../assets/img/hotel1.jpg" class="img-fluid cercle card-img-top zoom" alt="Responsive image">
      </div>
      <div class="col mt-3">
        <p class="mt-4 brown sous_titre" style="text-align: center;"><strong>Hôtels et Lodges en Afrique</strong><br></p>
        <p class="para">  Les plus beaux hôtels et lodges en Afrique. Ces établissements comptent parmi les plus luxueux et sophistiqués au monde et ont fait l’objet d’une sélection rigoureuse.
        </p>
      </div>
    </div>
</div>
<div class="mt-5"></div>


<script>
// Tabs
function openLink(evt, linkName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("myLink");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(linkName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}

// Click on the first tablink on load
document.getElementsByClassName("tablink")[0].click();
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>
 <?php
   include("template/footer.php")
  ?>

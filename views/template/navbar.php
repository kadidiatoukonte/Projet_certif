<?php
  // include("template/header.php")
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
            <a class="dropdown-item" href="as.php">Afrique du Sud</a>
            <a class="dropdown-item" href="ci.php">Côte d'Ivoire</a>
            <a class="dropdown-item" href="kenya.php">Kenya</a>
            <a class="dropdown-item" href="mali.php">Mali</a>
            <a class="dropdown-item" href="senegal.php">Sénégal</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Safaris
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="as.php">Afrique du Sud</a>
            <a class="dropdown-item" href="kenya.php">Kenya</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Hôtels et Lodges
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="as.php">Afrique du Sud</a>
            <a class="dropdown-item" href="ci.php">Côte d'Ivoire</a>
            <a class="dropdown-item" href="kenya.php">Kenya</a>
            <a class="dropdown-item" href="mali.php">Mali</a>
            <a class="dropdown-item" href="senegal.php">Sénégal</a>
          </div>
        </li>    
        <li class="nav-item">
          <a class="nav-link" href="parc.php">Parcs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reservation.php">Réservation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
</body>
<?php
    include("template/header.php");
    include("template/navbar.php")
?>

<body class="w3-light-grey">

<header class="w3-display-container w3-content " style="max-width:1500px">
  <img class="w3-image" src="../assets/img/backgroundImg.jpg" alt="" width="1500" height="700"> 
  <div class="w3-display-middle" style="width:100%">
    <div class="w3-bar" style="background: #333;">
      <form action="reservation.php" method="post" class="text-center">
        <div class="" style="padding: 10px; margin: 0 auto;">
          <label for="" style="color: white;">Destination :</label>
          <select name="nameReservation" id="">
            <option value="">Où souhaitez-vous aller ?</option>
            <option value="">Afrique du Sud </option>
            <option value="">Côte d'Ivoire</option>
            <option value="">Kenya</option>
            <option value="">Mali</option>
            <option value="">Sénégal</option>
          </select>
          <label for="" class="ml-3" style="color: white;">Arrivée :</label>
          <input type="date" name="arriveReservation" >
       
          <label for="" class="ml-3" style="color: white;">Départ :</label>
          <input type="date" name="departReservation" >
        

          <label for="" class="ml-3" style="color: white;">Capacité :</label>
          <select name="capaciteReservation" id="">
            <option value="">1 personne</option>
            <option value="">2 personnes</option>
            <option value="">3 personnes</option>
            <option value="">5 personnes</option>
            <option value="">6 personnes</option>
            <option value="">7 personnes</option>
            <option value="">8 personnes et +</option>
          </select>
          <input name="submit" id="" class="ml-4 btn-danger" type="submit" value="Rechercher">
        </div>
      </form>
    </div>
  </div> 
</header>

</body>

<?php
    include("template/footer.php")
?>
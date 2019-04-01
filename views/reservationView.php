<?php
    include("template/header.php");
    include("template/navbar.php")
?>

<body class="w3-light-grey">

<header class="w3-display-container w3-content w3-hide-small" style="max-width:1500px">
  <img class="w3-image" src="../assets/img/backgroundImg.jpg" alt="" width="1500" height="700"> 
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-black">
      <label for="">Où souhaitez-vous aller ?</label><br>
        <select id="pet-select">
            <option value="">Où souhaitez-vous aller ?</option>
            <option value="dog">Afrique du Sud</option>
            <option value="cat">Côte d'Ivoire</option>
            <option value="hamster">Kenya</option>
            <option value="parrot">Mali</option>
            <option value="spider">Sénégal</option>
        </select>
        <label for="">Arrivée</label><br>
            <input type="date" placeholder="Arrivée">
        <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Car');"></button>
    </div>
  </div> 
</header>

</body>

<?php
    include("template/footer.php")
?>
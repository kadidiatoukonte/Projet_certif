<?php
  include("template/header.php")
 ?>

<body class="w3-light-grey">

<div class="w3-bar w3-white w3-border-bottom">
  <div class="fixed-top" style="background-color: white;">
  <a href="index.php" class="w3-bar-item"><img src="../assets/img/logo.png" alt="logo" style="width: 60px;"></a>
<!-- </div> -->
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

<?php
// foreach($contacts as $contact){
//     echo $contact->getNameContact();
//     echo $contact->getEmailContact();
//     echo $contact->getMessageContact();

// }

?>

    <hr>  
        <div class="text-center">
            <h2 class="mt-5 brown">Contact</h2>
            <p><a href="index.php">ACCUEIL </a> / CONTACT</p>
        </div>
        <hr>
        <div class="one_third last">
            <div class="row mx-auto" style="height: 100%;">
              
                <div class="col-6">
                        <h4>Laisser un message</h4>

                        <!-- Begin main content -->
                        <div id="reponse_msg"><ul></ul></div>
                        
                        <form id="contact_form" method="post" action="contact.php">
                            <label for="your_name">Nom *</label>
                            <input id="your_name" name="nameContact" type="text" class="required_field" style="width:96%">
                            <br>
                            <br>		
                                                
                            <label for="email">Email *</label>
                            <input id="email" name="emailContact" type="text" class="required_field email" style="width:96%">
                            <br>			
                            <br>    
                            
                            <label for="message">Message *</label>
                            <textarea id="message" name="messageContact" rows="3" cols="10" class="required_field" style="width:96%"></textarea>
                            <br>
                            <br>			
                    
                            <p>
                                <input id="messageContact" name="submit" type="submit" value="Envoyer">
                            </p>
                        </form>
                </div>
            
                <div class="col-6">
                    <div class="maps">
                        <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2532.975134440496!2d3.1164616510382395!3d50.590415479394274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d6f35265a399%3A0x90bd89b34429efcd!2s2+Boulevard+Thomson%2C+59810+Lesquin%2C+France!5e0!3m2!1sen!2sus!4v1532089438175" style="border:0;  width: 40em; height: 25em" allowfullscreen="" frameborder="0"></iframe>
                    </div>
                </div>
                
            </div>
        </div>

       

</body>
<?php
   include("template/footer.php")
  ?>
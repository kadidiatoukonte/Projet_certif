<?php
  include("template/header.php");
  include("template/navbar.php")
 ?>

<body class="w3-light-grey">


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
        <p><?= $messageSend ?></p>
        <div class="one_third last">
            <div class="row mx-auto" style="height: 100%;">
              
                <div class="col-6">
                        <h4>Laisser un message</h4>

                        <!-- Begin main content -->
                        <div id="reponse_msg"><ul></ul></div>
                        
                        <form id="contact_form" method="post" action="contact.php">
                            <label for="your_name">Nom *</label>
                            <input id="your_name" name="nameContact" type="text" class="required_field" style="width:96%" required>
                            <br>
                            <br>		
                                                
                            <label for="email">Email *</label>
                            <input id="email" name="emailContact" type="text" class="required_field email" style="width:96%" required>
                            <br>			
                            <br>    
                            
                            <label for="message">Message *</label>
                            <textarea id="message" name="messageContact" rows="3" cols="10" class="required_field" style="width:96%" required></textarea>
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
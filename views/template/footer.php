 <footer class="mt-5 py-4">
   <p class="footer_rea text-center">SITE WEB RÉALISÉ PAR KADIDIATOU KONTE</p>
 </footer>
 
 
 <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<script>
document.getElementById("Galerie").addEventListener("click", myGalerie);
document.getElementById("lekenya").addEventListener("click", myGalerie);
document.getElementById("formalites").addEventListener("click", myGalerie);
document.getElementById("sante").addEventListener("click", myGalerie);
document.getElementById("video").addEventListener("click", myGalerie);

function myGalerie() {
  document.getElementById("lekenya").style.display = "none";
  document.getElementById("formalites").style.display = "none";
  document.getElementById("sante").style.display = "none";
  document.getElementById("video").style.display = "none";
  document.getElementById("galerie").style.display = "block";

}

document.getElementById("galerie").addEventListener("click", myKenya);
document.getElementById("Lekenya").addEventListener("click", myKenya);
document.getElementById("formalites").addEventListener("click", myKenya);
document.getElementById("sante").addEventListener("click", myKenya);
document.getElementById("video").addEventListener("click", myKenya);

function myKenya() {
  document.getElementById("galerie").style.display = "none";
  document.getElementById("lekenya").style.display = "block";
  document.getElementById("video").style.display = "none";
  document.getElementById("sante").style.display = "none";
  document.getElementById("formalites").style.display = "none";
}

document.getElementById("galerie").addEventListener("click", myFormalites);
document.getElementById("lekenya").addEventListener("click", myFormalites);
document.getElementById("Formalites").addEventListener("click", myFormalites);
document.getElementById("sante").addEventListener("click", myFormalites);
document.getElementById("video").addEventListener("click", myFormalites);

function myFormalites() {
  document.getElementById("formalites").style.display = "block";
  document.getElementById("lekenya").style.display = "none";
  document.getElementById("galerie").style.display = "none";
  document.getElementById("sante").style.display = "none";
  document.getElementById("video").style.display = "none";

}

document.getElementById("galerie").addEventListener("click", mySante);
document.getElementById("lekenya").addEventListener("click", mySante);
document.getElementById("formalites").addEventListener("click", mySante);
document.getElementById("Sante").addEventListener("click", mySante);
document.getElementById("video").addEventListener("click", mySante);

function mySante() {
  document.getElementById("lekenya").style.display = "none";
  document.getElementById("galerie").style.display = "none";
  document.getElementById("formalites").style.display = "none";
  document.getElementById("video").style.display = "none";
  document.getElementById("sante").style.display = "block";


}

document.getElementById("galerie").addEventListener("click", myVideo);
document.getElementById("lekenya").addEventListener("click", myVideo);
document.getElementById("formalites").addEventListener("click", myVideo);
document.getElementById("Video").addEventListener("click", myVideo);

function myVideo() {
  document.getElementById("lekenya").style.display = "none";
  document.getElementById("galerie").style.display = "none";
  document.getElementById("formalites").style.display = "none";
  document.getElementById("sante").style.display = "none";
  document.getElementById("video").style.display = "block";

}
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://www.google-analytics.com/analytics.js" async defer></script>
  

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script> -->
    <script src="../assets/js/main.js"></script>

</body>

</html>


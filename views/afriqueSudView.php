<?php
  include("template/header.php")
 ?>

<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-border-bottom">
  <div class="fixed-top" style="background-color: white;">
  <a href="#" class="w3-bar-item"><img src="../assets/img/logo.png" alt="logo" style="width: 60px;"></a>
  <nav class="navbar navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil</a>
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
  <img class="w3-image" src="../assets/img/as6.jpg" alt="" width="1500" height="700"> 
  <div class="w3-display-middle" style="width:65%">
    <div class="w3-bar w3-transparent" style="color: black;">
      <h3>Afrique du Sud</h3>
      <p>ACCUEIL / DESTINATIONS / Afrique du Sud</p>
    </div>
  </div>  
</header>

<div class="row mt-3 card-deck">
  <div class="col mt-3">
      <p class="mt-4 brown sous_titre" style="text-align: center;"><strong>La belle Afrique du Sud est devenue la première destination touristique en Afrique et l’essor ne cesse de croître …</strong><br></p>
  </div>
  <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3 mt-4 -webkit-inline-box">
      <img src="../assets/img/asLogo.png" class="img-fluid cercle card-img-top zoom" style="width: 50%;" alt="Responsive image">
  </div> 
</div>

<div class="row card-deck">
  <div class="col mt-3">
    <p>Les visiteurs apprécieront particulièrement la découverte des réserves de la faune africaine aux superbes structures hôtelières. Cependant, l’attrait de l’Afrique du Sud est loin de se limiter à l’observation des “Big Five” (tels que définis par Ernest Hemingway) : le Lion, l’Eléphant, le Buffle, le Léopard et le Rhinocéros noir.
       Le passé, son histoire récente, son architecture et les différentes cultures de la “nation arc-en-ciel” en font une destination de choix ….
    </p>
  </div>
</div>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col"><a id="Galerie" href="#">Galerie</a></th>
      <th scope="col"><a id="Lekenya" href="#">Pays</a></th>
      <th scope="col"><a id="Sante" href="#">Santé</a></th>
      <th scope="col"><a id="Formalites" href="#">Formalités</a></th>
      <th scope="col"><a id="Video" href="#">Vidéo</a></th>
    </tr>
  </thead>
    <tr>
      <td>
            <div id="galerie">
                <div class="w3-content w3-section w3-display-container text-center" style="max-width:800px">
                  <img class="mySlides w3-image" src="../assets/img/as2.jpeg" alt="Kenya" width="800" height="600">
                  <img class="mySlides w3-image" src="../assets/img/as3.jpeg" alt="Kenya" width="800" height="600">
                  <img class="mySlides w3-image" src="../assets/img/as4.jpeg" alt="Kenya" width="800" height="600">
                  <img class="mySlides w3-image" src="../assets/img/as5.jpeg" alt="Kenya" width="800" height="600">
                  <img class="mySlides w3-image" src="../assets/img/as7.jpg" alt="Kenya" width="800" height="600">
                  <img class="mySlides w3-image" src="../assets/img/as8.jpg" alt="Kenya" width="800" height="600">
                </div>
            </div>
      </td>
      <td>
            <div id="lekenya">    
                <p class="brown"><em><strong>Carte d’identité de l’Afrique du Sud :</strong></em></p>
                <p style="text-align: justify">République constitutionnelle parlementaire unitaire<br>
                Deuxième puissance économique d’Afrique (après le Nigéria)<br>
                <strong>11 langues officielles:</strong> Anglais, Afrikaans, Zoulou, Xhosa, Venda, Tswana, Sotho du Nord, Sotho du Sud, Nrebele, Siswati, Tsonga.<br>
                <strong>Capitales :</strong> Pretoria (administrative), Le Cap (législative), Bloemfontein (judiciaire).<br>
                <strong>Principales villes : </strong>Le Cap, Durban, Johannesburg, Soweto, Pretoria, Port Elizabeth, Pietermaritzburg, Bloemfontein, Newcastle, East London, George, Epumalanga, Nelspruit, Stellenbosch<br>
                <strong>9 provinces : </strong>Cap-Occidental, Cap-du-Nord, Cap-Oriental, KwaZulu-Natal, État-Libre, province du Nord-Ouest, Gauteng, Mpumalanga, Limpopo.<br>
                <strong>Superficie totale :</strong> 1 219 912 km²<br>
                <strong>Population :</strong> 54 millions (2014)<br>
                <strong>Peuples :</strong> Afrikaners, Griqua, Malais du Cap (ou musulmans du Cap), Métis du Cap, Sothos, Vendas, Xhosas, Zoulous<br>
                <strong>Monnaie :</strong> Rand (ZAR)<br>
                <strong>Indicatif téléphonique :</strong> +27</p>
                <p style="text-align: justify"><strong>Entrée en Afrique du Sud : </strong>Pour des séjours inférieurs à 90 jours, les titulaires d’un passeport français sont dispensés de visa préalable. Un permis de séjour de 90 jours sera délivré à la frontière à l’entrée sur le territoire sud-africain. Le passeport doit impérativement comporter deux pages vierges et être encore valable 30 jours après la date prévue de sortie du territoire sud-africain. A défaut, les voyageurs sont refoulés à l’arrivée.</p>
                <p style="text-align: justify"><em><strong>Ambassade d’Afrique du sud en France </strong></em>(Fonctions consulaires assurées par l’Ambassade)<br>
                59, Quai d’Orsay – 75343 – Paris Cedex 07 – Tél. : 01 53 59 23 23 – info@afriquesud.net – http://www.afriquesud.net.</p>
                <p style="text-align: justify"><a href="https://www.afrique-tourisme.com/wp-content/uploads/2015/03/soweto-choir.jpg"><img class="aligncenter size-full wp-image-8661" src="https://www.afrique-tourisme.com/wp-content/uploads/2015/03/soweto-choir.jpg" alt="" width="900" height="333"></a></p>
                <p style="text-align: justify"><strong>Santé : </strong>Il est conseillé d’emporter dans ses bagages ses médicaments habituels et de souscrire une assurance-voyage couvrant les frais médicaux et assurant le rapatriement sanitaire (se munir du numéro de téléphone d’urgence de la compagnie d’assistance.</p>
                <ul>
                    <li style="text-align: justify"><em>Vaccinations</em><br>
                        La mise à jour de la vaccination diphtérie-tétanos est recommandée ;<br>
                        Autres vaccinations conseillées (selon la durée, de la fréquence et des conditions d’hygiène du séjour) : fièvre typhoïde, hépatites A et B ;<br>
                        La vaccination contre la rage peut éventuellement être proposée dans certains cas ;<br>
                        Se renseigner auprès du médecin traitant ou d’un centre de vaccinations internationales.</li>
                    <li style="text-align: justify"><em>Prévention des maladies transmises par les piqûres d’insectes</em><br>
                        Des zones de paludisme subsistent dans les provinces du Mpumalanga, du Limpopo et du KwaZulu-Natal, aux frontières avec le Mozambique, le Swaziland et le Zimbabwe, notamment dans la région du parc Kruger.<br>
                        L’usage de spray, crèmes, diffuseurs électriques, moustiquaires, etc. s’impose.<br>
                        Avant votre départ, prendre conseil auprès d’un médecin pour l’éventuelle prescription d’un traitement préventif.</li>
                    <li style="text-align: justify"><em>Prévention des MST et du SIDA</em><br>
                        Le SIDA est très répandu en Afrique du Sud. Il est donc nécessaire d’être vigilant face aux risques d’infection lors des rapports sexuels ou lors de transfusions sanguines.</li>
                    <li style="text-align: justify"><em>Hygiène alimentaire</em><br>
                        Dans les agglomérations, l’eau du robinet est potable. Dans les zones rurales, il est recommandé de boire de l’eau minérale, en bouteille.<br>
                        Lavage régulier et soigneux des mains avant chaque repas.</li>
                </ul>
	     
            </div>
      </td>
      <td>
            <div id="formalites">     
                <h3 class="brown"><strong>Formalités d’entrée en Afrique du Sud :</strong></h3>
                <p style="text-align: justify">Pour des séjours touristiques en Afrique du Sud inférieurs à 3 mois, les titulaires d’un passeport français (ordinaire, diplomatique ou de service) sont dispensés de visa préalable. Un permis de séjour de 90 jours sera délivré à la frontière à l’entrée sur le territoire sud-africain.</p>
                <p>Le passeport doit impérativement comporter 2 pages vierges et être encore valable 30 jours après la date prévue de sortie du territoire sud-africain. A défaut, les voyageurs sont refoulés à l’arrivée.</p>
                <p style="text-align: justify">Depuis le 1er juin 2015, la nouvelle réglementation en matière d’entrée et de sortie des mineurs en Afrique du sud, qu’ils soient étrangers ou Sud-Africains, est entrée en vigueur. Les parents seront tenus de présenter un justificatif attestant du lien de filiation avec leurs enfants, à l’entrée comme à la sortie du territoire sud-africain. Cette mesure s’applique en tout point frontalier sur le territoire y compris aux frontières terrestres.</p>
                <p><strong>Documents qui devront être présentés à l’entrée et à la sortie :</strong></p>
                <ol>
                    <li><em><strong>Si le mineur voyage avec ses deux parents</strong></em><br>
                        Son passeport personnel.<br>
                        La copie intégrale de l’acte de naissance traduite par un traducteur assermenté ou son extrait d’acte de naissance plurilingue. Il n’y a aucune condition relative à la date de délivrance de ces documents d’état civil.<br>
                        Le livret de famille pourra également être présenté pour justifier des filiations.
                    </li>
                    <li><em><strong>Si le mineur ne voyage qu’avec un seul de ses deux parents non séparés</strong></em><br>
                        Les documents du point 1.<br>
                        Une autorisation de sortie du territoire qui doit être renseignée et signée par le parent ne voyageant pas et accompagnée d’une copie de sa pièce d’identité certifiée conforme à l’original. Cette autorisation doit dater de moins de 4 mois à la date du voyage. Les voyageurs doivent se rapprocher de la mairie de leur domicile pour y faire certifier la signature apposée sur l’autorisation (gratuit). Ils peuvent également se rapprocher d’un notaire pour ce faire (payant) ou encore de l’ambassade d’Afrique du Sud dans leur pays de résidence.
                    </li>
                    <li><em><strong>Pour les mineurs dont l’un des deux parents est décédé</strong></em><br>
                        Les documents du point 1.<br>
                        L’acte de décès du parent traduit par un traducteur assermenté ou l’extrait plurilingue de l’acte de décès.
                    </li>
                    <li><em><strong>Si le mineur ne voyage qu’avec un seul de ses deux parents divorcés ou séparés officiellement</strong></em><br>
                        Les documents des points 1 et 2.<br>
                        Le jugement de divorce ou tout autre document officiel attestant de l’attribution de la garde de l’enfant traduit par un traducteur assermenté.
                    </li>
                    <li><em><strong>Si le mineur est accompagné d’un adulte mais ne voyage avec aucun de ses parents</strong></em><br>
                        Les documents des points 1 et 2. La déclaration sur l’honneur devant être signée des deux parents en l’occurrence.<br>
                        Les copies certifiées conformes des pièces d’identité ou passeports des deux parents.<br>
                        Les coordonnées complètes des parents.
                    </li>
                </ol>
            </div>
      </td>
      <td>
            <div id="sante">      
			    <p><strong>Avant le départ :</strong></p>
                <ul>
                    <li>Consulter votre médecin et prévoir d’emporter vos éventuels médicaments habituels.</li>
                    <li>Souscrire une assurance-voyage (frais médicaux et rapatriement sanitaire). Pour les contrats d’assurance-voyage associés à une carte de crédit ou une mutuelle, pensez à vous munir du numéro de téléphone d’urgence de la compagnie d’assistance.<br>
                    Les soins des hôpitaux privés sud-africains sont très coûteux et vous pourrez vous voir refuser les soins jusqu’à présentation de garanties de paiement ou d’une assurance-santé.</li>
                    <li>Aucun vaccin obligatoire mais la mise à jour de la vaccination diphtérie-tétanos est conseillée. Se renseigner auprès du médecin traitant.</li>
                </ul>
                <p style="text-align: justify"><strong>Paludisme : </strong>Des zones impaludées de classification zone 3 subsistent dans les provinces du Mpumalanga, du Limpopo et du KwaZulu-Natal, aux frontières avec le Mozambique, le Swaziland et le Zimbabwe, notamment dans la région du parc Kruge où le recours à des mesures de protection individuelle (spray, crèmes, diffuseurs électriques, moustiquaires, etc) s’impose.<br>
                A ces mesures doit s’ajouter un traitement médicamenteux adapté à chaque individu. Il convient donc de se renseigner auprès de votre médecin traitant.<br>
                En cas de fièvre durant le séjour et dans les deux mois qui suivent le retour, il est primordial de signaler au médecin un séjour récent en zone infectée.</p>
                <p style="text-align: justify"><strong>Prévention des MST et du VIH-SIDA :</strong> Le VIH-SIDA est très répandu en Afrique du Sud et toutes les classes sociales et tous les âges sont touchés, dans toutes les provinces du pays. Il convient d’être en permanence vigilant face aux risques d’infection lors des rapports sexuels ou lors de transfusions sanguines. Toutes mesures de prévention sont indispensables. Les victimes d’agression sexuelle doivent immédiatement consulter un médecin.</p>

            </div>
      </td>
      <td>
            <div id="video">
              <a href="https://www.youtube.com/watch?v=mm3U-vnzwR4" target="_target"><img src="../assets/img/asVideo.jpg" alt="Tourisme en Afrique du Sud"></a>     
            </div>
      </td>
    </tr>
  </tbody>
</table>

<hr>
<div class="mt-4">
	
<div class="wpb_wrapper">
	<h3 class="brown">Les vacances que nous vous proposons en Afrique du Sud :</h3>
    <ul>
        <li><a href="https://www.afrique-tourisme.com/safari/afrique-du-sud/" target="_blank">Les safaris en Afrique du Sud</a></li>
        <li><a href="https://www.afrique-tourisme.com/hotels-et-lodges/afrique-du-sud/" target="_blank">Les hôtels et lodges en Afrique du Sud</a></li>
        <li><a href="https://www.afrique-tourisme.com/circuits/afrique-du-sud/" target="_blank">Les circuits en Afrique du Sud</a></li>
        <li><a href="https://www.afrique-tourisme.com/croisiere-a-bord-du-rms-st-helena/" target="_blank">La croisière du RMS St.Helena au départ du Cap</a></li>
        <li><a href="https://www.afrique-tourisme.com/lune-de-miel-cape-town-maurice/" target="_blank">Lune de miel au Cap</a></li>
        <li><a href="https://www.afrique-tourisme.com/trainsdeluxe/" target="_blank">Les trains de luxe en Afrique du Sud</a></li>
        <li><a href="https://www.afrique-tourisme.com/garden-route-afrique-du-sud/" target="_blank">La “Garden Route”</a></li>
    </ul>
	
</div>



</body>

 <?php
   include("template/footer.php")
  ?>
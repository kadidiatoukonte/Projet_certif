<?php

function chargerClasse($classname)
{
    if(file_exists('../model/'. $classname.'.php')){
        require '../model/'. $classname.'.php';
    }
    else {
        require '../entities/' . $classname . '.php';
    }
}
spl_autoload_register('chargerClasse');

// Connexion à la base de données
$db = Database::DB();

// On instancie notre manager
$reservationmanager = new ReservationManager($db);


include "../views/reservationView.php";
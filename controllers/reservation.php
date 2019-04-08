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

if(isset($_POST['submit'])){
    if(isset($_POST['nameReservation']) && isset($_POST['arriveReservation']) && isset($_POST['departReservation']) && isset($_POST['capaciteReservation']) && !empty($_POST['nameReservation']) && !empty($_POST['arriveReservation']) && !empty($_POST['departReservation']) && !empty($_POST['capaciteReservation'])){
        $nameReservation = htmlspecialchars($_POST['nameReservation']);
        $arriveReservation = htmlspecialchars($_POST['arriveReservation']);
        $departReservation = htmlspecialchars($_POST['departReservation']);
        $capaciteReservation = htmlspecialchars($_POST['capaciteReservation']);

        $reservationmanager->createReservations($reservation);
    }
}

$reservation = $reservationmanager->getReservations();

include "../views/reservationView.php";
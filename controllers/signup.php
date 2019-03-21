<?php

// On enregistre notre autoload.
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
$adminManager = new AdminManager($db);



// Si le formulaire de création de compte est soumis
if(isset($_POST['signup'])){

	// Si le champ name est bien rempli, et n'est pas vide
	if(isset($_POST['nameAdmin']) && isset($_POST['emailAdmin']) && isset($_POST['passwordAdmin']) && !empty($_POST['nameAdmin']) && !empty($_POST['emailAdmin']) && !empty($_POST['passwordAdmin'])){
        $nameAdmin = htmlspecialchars($_POST['nameAdmin']);
        $emailAdmin = htmlspecialchars($_POST['emailAdmin']);
        $passwordAdmin = htmlspecialchars($_POST['passwordAdmin']);
        $pdoAdmin = new Admin([
			'nameAdmin' => $nameAdmin,
			'passwordAdmin' => $passwordAdmin,
			'emailAdmin' => $emailAdmin
        ]);
        
		$getAdmin = $adminManager->getAdmin($nameAdmin);
		if (!$getAdmin) {
            echo 'gg';
			$adminManager->createAdmin($pdoAdmin);
		}
	}
}
$admins = $adminManager->getAdmins();
// Enfin, on inclut la vue
include "../views/signupView.php";

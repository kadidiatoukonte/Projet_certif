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
if(isset($_POST['login'])){

	// Si le champ name est bien rempli, et n'est pas vide
	if(isset($_POST['nameAdmin']) && isset($_POST['passwordAdmin']) && !empty($_POST['nameAdmin']) && !empty($_POST['passwordAdmin'])){

        $nameAdmin = htmlspecialchars($_POST['nameAdmin']);
        $passwordAdmin = htmlspecialchars($_POST['passwordAdmin']);
        $pdoAdmin = new Admin([
			'nameAdmin' => $nameAdmin,
			'passwordAdmin' => $passwordAdmin
		]);
		$getAdmin = $adminManager->verifAdminDispo($pdoAdmin);
        if($getAdmin){
			if ($passwordAdmin == $getAdmin->getPasswordAdmin())
			{
				header('location: index.php');
			} else {
				header('location: login.php');
			}
		} else {
			header('location: login.php');
		}
	} 
}

// Enfin, on inclut la vue
include "../views/loginView.php";

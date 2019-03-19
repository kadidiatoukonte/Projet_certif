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
$contactmanager = new ContactManager($db);

if(isset($_POST['submit'])){
    
    // Si le champ name est bien rempli, et n'est pas vide
    if (isset($_POST['nameContact']) && isset($_POST['emailContact']) && isset($_POST['messageContact']) && !empty($_POST['nameContact']) && !empty($_POST['emailContact']) && !empty($_POST['messageContact'])) {
        $nameContact = htmlspecialchars($_POST['nameContact']);
        $emailContact = htmlspecialchars($_POST['emailContact']);
        $messageContact = htmlspecialchars($_POST['messageContact']);
        
        
        // On instancie un objet $account
        $contact = new Contact([
            'nameContact' => $nameContact,
            'emailContact' => $emailContact,
            'messageContact' => $messageContact
            ]);
            
            // On enregistre l'objet $account dans la base de données
            $contactmanager->createContacts($contact);
        }       
        var_dump($nameContact);

}

$contact = $contactmanager->getContacts();


require '../views/contactView.php';

?>
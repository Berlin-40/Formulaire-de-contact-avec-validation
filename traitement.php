<?php
require_once __DIR__ . '/Domain/Entity/Contact.php';
require_once __DIR__.'/Infrastructure/FileContactRepository.php';
require_once __DIR__.'/UseCase/SaveContact.php';

use Domain\Entity\Contact;
use Infrastructure\FileContactRepository;
use UseCase\SaveContact;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $prenom = $_POST["prenom"];
    $message = $_POST["message"];

    //liste des erreurs
    $erreurs = [];
    $confirm = "";

    //Les useCase
    $repository = new FileContactRepository();
    $contact = $repository->findById(1);
    $save = new SaveContact($repository);

    //gestion du prenom
    if(strlen($prenom) < 3){
        $erreurs[] = "Le prenom est trop court";
    }
    //gestion du nom
    if(strlen($nom) < 3){
        $erreurs[] = "Le nom est trop court";
    }
    //gestion de l'email mail
    if(strlen($email) < 3){
        $erreurs[] = "";
    }

    //gestion des erreurs
    if(count($erreurs) == 0){
        //Enregister le contact dans le file avec un usecase
        $conctact = new Contact($nom,$prenom,$email,$message) ;
        
        if($save->execute($conctact)){
            $confirm = "OK";
        }

    }
    else{

    }
    include"formulaire.php";

}
?>
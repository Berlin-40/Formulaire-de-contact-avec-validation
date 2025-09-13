<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $prenom = $_POST["prenom"];
    $message = $_POST["message"];

    //liste des erreurs
    $erreurs = [];
    $confirm = "";

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
        $confirm = "ok add maibe";
    }
    else{

    }
    include"formulaire.php";

}
?>
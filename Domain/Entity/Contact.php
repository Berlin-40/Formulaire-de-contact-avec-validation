
<?php

class Contact{
    public $nom;
    public $prenom;
    public $message;
    public $email;

    function toString($id){
        return $id." Nom:".$this->nom." Prenom:".$this->prenom." Email:".$this->email." Message:".$this->message;
    }
}

?>
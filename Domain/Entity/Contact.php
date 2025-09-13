<?php
namespace Domain\Entity;

class Contact{
    public $nom;
    public $prenom;
    public $message;
    public $email;

    private $id;

    function __construct($nom, $prenom, $email, $message){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->message = $message;
        $this->email = $email;
        $this->id = null;
    }
    function __toString(){
        return $this->id.",".$this->nom.",".$this->prenom.",".$this->email.",".$this->message."\n";
    }
    public function setId($id) {
        $this->id = $id;
    }

}

?>
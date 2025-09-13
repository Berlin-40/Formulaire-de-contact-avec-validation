<?php
namespace Infrastructure;

require_once __DIR__.'/../Domain/Entity/Contact.php';
require_once __DIR__.'/../Domain/RepositoryInterface/ContactRepositoryInterface.php';

use Domain\Entity\Contact;
use Domain\RepositoryInterface\ContactRepositoryInterface;

class FileContactRepository implements ContactRepositoryInterface
{
    private $file_contact_bd = __DIR__. '/../data/contacts.txt';
    private Int $lastid = 0;
    public function __construct(){
        if(!file_exists($this->file_contact_bd)){
            file_put_contents($this->file_contact_bd, "");
        }
    }

    public function findById($id){

        $myfile = fopen($this->file_contact_bd,"r");
        if (!$myfile) return null;

        while(($line = fgets($myfile)) !== false){
            $line = trim($line);

            if ($line === "") continue;
            $parts = explode(",", $line);
            $lineId = $parts[0];
            
            if ($id == $lineId) {
                fclose($myfile);
                
                //construire un objet Contact
                $contact = new Contact($parts[1],$parts[2],$parts[3],$parts[4]);
                return $contact; 
            }
        }
        fclose($myfile);
        return null;
    }

    public function save(Contact $contact) {
            $contact->setId($this->lastid);
            $this->lastid++;   
            $file = fopen($this->file_contact_bd,"a");
            fwrite($file, $contact->__toString());
            fclose($file);
    }

    public function findAll():?array{

        $file = fopen($this->file_contact_bd,"r");
        if (!$file) return null;
        $res = [];
        while(($line = fgets($file)) !== false){
            $line = trim($line);
            if ($line === "") continue;
            $parts = explode(",", $line);
            $contact = new Contact($parts[1],$parts[2],$parts[3],$parts[4]);
            $res[] = $contact;
        }
        fclose($file);
        return $res;
    }

    public function delede($id){
        // Implement delede logic here
    }
}

?>
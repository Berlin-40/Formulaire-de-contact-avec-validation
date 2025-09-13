<?php

namespace UseCase;

require_once __DIR__.'\CheckContact.php';

use Domain\Entity\Contact;
use Domain\RepositoryInterface\ContactRepositoryInterface;
use UseCase\CheckContact;

class SaveContact{
    public ContactRepositoryInterface $repo;

    public function __construct(ContactRepositoryInterface $repo){
        $this->repo = $repo;
    }
    public function execute(Contact $contact):bool{
        
        $check = new CheckContact($this->repo);

        if($check->execute($contact->nom)){
            $this->repo->save($contact);
            return true;
        }
        return false;
    }
}
?>
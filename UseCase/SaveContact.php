<?php

class SaveContact{
    public ContactRepositoryInterface $repo;

    public function __construct(ContactRepositoryInterface $repo){
        $this->repo = $repo;
    }
    public function execute(Contact $contact){
        
        $check = new CheckContact($this->repo);

        if($check->execute($contact->nom)){
            $this->repo->save($contact);
            return true;
        }
        return false;
    }
}
?>
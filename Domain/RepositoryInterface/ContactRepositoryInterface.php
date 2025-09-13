<?php
namespace Domain\RepositoryInterface;

use Domain\Entity\Contact;

interface ContactRepositoryInterface{
    public function save(Contact $contact);
    public function findById($id);
    public function findAll();
    public function delede($id);
}
?>
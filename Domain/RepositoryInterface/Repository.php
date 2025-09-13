
<?php
interface ContactRepositoryInterface{
    public function save($contact);
    public function findById($id);
    public function findAll();
    public function delede($id);
}
?>
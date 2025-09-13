<?php

namespace UseCase;


use Domain\RepositoryInterface\ContactRepositoryInterface;

class CheckContact{

    private ContactRepositoryInterface $repo;
    public function __construct($repo){
        $this->repo = $repo;
    }
    public function execute($name):bool{
        $data = $this->repo->findAll();

        foreach($data as $item){
            if($item->name == $name){
                return false;
            }
        }
        return true;
    }
}
?>
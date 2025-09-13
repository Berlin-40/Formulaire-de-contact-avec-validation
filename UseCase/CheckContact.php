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
            echo $item;
            if($item->name == $name){
                return true;
            }
        }
        return false;
    }
}
?>
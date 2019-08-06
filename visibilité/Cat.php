<?php
  
class Cat {
    private $name;
    private $type;
    private $fur;

    public function getName(){
        return $this->name;

    }
    public function getType(){
        return $this->type;

    }
    public function setName($name){
    //retourner l'obj permet de chainer les methodes
         $this->name=$name;
        return $this;
    }
    public function setType($type){
         $this->type=$type;
         return $this;
    }

}
<?php

class Game{
    //contient les joueurs de la partie  
    private $players= [];
    //permet l'ajout de joueur
    public function addPlayer($player=null){
        array_push($this->players,$player);
       //  $this->players[]=$player;

         return $this;
    }
}
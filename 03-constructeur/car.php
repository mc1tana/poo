<?php
class Car{
    var $wheel;
    var $color;
    var $mark;
    var $model;

    
    public function __construct($wheel=null, $color=null,$mark=null, $model=null)
    {
        $this->wheel = $wheel;
        $this->color = $color;
        $this->mark = $mark;
        $this->model = $model;



    }

    public function setColor($color){
        $this->color=$color;
    }
    function roll(){
        return  'la '. $this->mark.' '.$this->model.' roule sur '.$this->wheel.' roue ';
   }
   function Honk(){
       return 'la '. $this->mark.' '.$this->model.' klaxonne " poupou "';

   }
}
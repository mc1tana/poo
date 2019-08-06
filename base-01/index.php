<?php

    class Cat
    {
        var $name;
        var $type;
        var $fur;
        function cry()
    {
        return 'Miaou !';
    }
    function mange(){
        return $this->name.' mange!';
    }

    }
    $bianca=new Cat();
    $mina=new Cat();
    $bianca->name="bianca";
    $bianca->type="chat des sable";
    $bianca->fur="roux";
    
     echo 'mon chat s\'appelle '.$bianca->name."<br>"."et il fait ".$bianca->cry().'<br>';
     echo $mina->name.'peut aussi faire '.$mina->cry().'<br>';
   
    echo $bianca->mange().'<br>';
    echo $bianca->mange().'<br>';

    
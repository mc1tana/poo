<?php

//on veut creer une class car possede 4roue,couleur marque et modele
//la voiture peut rouler et klaxonner

require_once  'car.php';


$car=new Car('4' , 'blue' ,'lexus' ,'Rx');

 

echo 'the car have : '.$car->wheel." wheel <br>"." mark :".$car->mark."<br>model :".$car->model."<br>color :".$car->color.'<br>'.$car->roll().'<br>'.$car->honk();

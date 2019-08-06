<?php

require_once 'Cat.php';
$bianca=new Cat();
$bianca
    ->setName('bianca')
    ->setType('chat des sable');
echo $bianca->getName();
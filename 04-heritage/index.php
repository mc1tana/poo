<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    
    <title>POO : heritage</title>
</head>
<body>
     <?php
     require_once 'Hunter.php';
     require_once 'Game.php';
     require_once 'Magus.php';
     require_once 'Warrior.php';


     //on peut creer une partie
         $game=new Game();

        $aragon=new Warrior('aragon');
        $legolas=new Hunter('legolas');
        $gandalf=new Magus('gandalf');


         $game
            ->addPlayer($aragon)
            ->addPlayer($legolas)
            ->addPlayer($gandalf)
        ;

     ?>
</body>
</html>


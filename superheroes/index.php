<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php 
require_once 'SuperHeroe.php';
$ironMan= new SuperHeroe();
$ironMan->name='Iron Man';
$ironMan->power='Riche';
$ironMan->identity='Tony Stark';
$ironMan->universe='Marvel';

$captainAmerica= new SuperHeroe('Captain ','force','steve rogers','Marvel');
$hulk= new SuperHeroe('hulk ','force','bruce banner','Marvel');
$batman=new SuperHeroe('batman ','riche','Bruce Wayne','DC');
$spiderMan=new SuperHeroe('spiderMan ','souple','peter parker','Marvel');


echo $hulk->getRealIdentity();
echo $hulk->getUniverse();
//$heroes=[$ironMan,$captainAmerica,$hulk,$batman, $spiderMan];
var_dump(SuperHeroe::all());

//creer la base de données :superheroes
//creer la table : superheroe
//creer les colonnes : name ,power ,identity,universe


//creer une connexion avec la base 
try{
   $db=new PDO("mysql:host=localhost;port=3306;dbname=superheroes;charset=utf8",'root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING]);

}
catch(Exceptio $e){
    die('Erreur :'.$e->getmessage());
}



$sql="INSERT INTO superheroe (`name` , `power` , `identity`, `universe` ) VALUES (:name, :power, :identity, :universe)";

       $q = $db->prepare($sql);
        $q->bindvalue(':name', $ironMan->name);
        $q->bindvalue(':power', $ironMan->power);
        $q->bindvalue(':identity', $ironMan->identity);
        $q->bindvalue(':universe',$ironMan->universe);

        $q->execute();

?>
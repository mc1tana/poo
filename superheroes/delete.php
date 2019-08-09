<?php
require_once 'DataBase.php';
include_once 'partials/header.php';

$db=DataBase::get();


$id=isset($_GET['id'])? $_GET['id'] : null;
$db=new PDO("mysql:host=localhost;port=3306;dbname=superheroes;charset=utf8","root","",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING]);
$sql="DELETE FROM superheroe WHERE `id`=$id";

 
$q=$db->query($sql);

$q->execute();

if(!empty($q)){
    echo "<div>le heore a bien ete suprimé</div>";
}
header('location:read.php');
include_once 'partials/footer.php';

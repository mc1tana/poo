<?php
require_once 'autoload.php';
include_once 'partials/header.php';

$db=DataBase::get();


$id=isset($_GET['id'])? $_GET['id'] : null;

$q=DataBase::get()->query("DELETE FROM superheroe WHERE `id`=$id");
 


$q->execute();

if(!empty($q)){
    echo "<div>le heore a bien ete suprimé</div>";
}
header('location:read.php');
include_once 'partials/footer.php';

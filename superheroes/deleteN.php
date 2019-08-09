<?php
require_once 'autoload.php';
include_once 'partials/header.php';




$id=isset($_GET['id'])? $_GET['id'] : null;

$supernaughty= new Naughty();
$supernaughty->delete($id);
if(!empty($q)){
    echo "<div>le heore a bien ete suprimé</div>";
}
header('location:readN.php');
include_once 'partials/footer.php';

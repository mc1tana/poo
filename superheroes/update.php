
<?php 
include_once 'partials/header.php';
$id = isset($_GET['id']) ? trim($_GET['id']) : null;

if($_SERVER['REQUEST_METHOD']==='POST'){

var_dump($id);
$db=new PDO("mysql:host=localhost;port=3306;dbname=superheroes;charset=utf8","root","",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING]);

$sql="UPDATE superheroe SET `name`=:name, `power`=:power, `identity`=:identity, `universe`=:universe WHERE `id`=:id";
$q=$db->prepare($sql);
var_dump($q);

$q->bindValue(':name',$_POST['name'] );
$q->bindValue(':power',$_POST['power'] );
$q->bindValue(':identity',$_POST['identity'] );
$q->bindValue(':universe',$_POST['universe'] );
$q->bindValue(':id',$id, PDO::PARAM_INT );

$q->execute();
var_dump($q);
header('location:read.php');

}


    $db=new PDO("mysql:host=localhost;port=3306;dbname=superheroes;charset=utf8",'root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING]);
    $sql = "SELECT * FROM `superheroe` WHERE `id`=:id ";
    // Préparation de la requete
    $q = $db->prepare($sql);
    $q->bindValue(':id',$id);
    // Execution de la requete
    $q->execute();
    var_dump($q);
    $heroes = $q->fetch(PDO::FETCH_OBJ); // $film->title
    var_dump($heroes);




?>

<div class="container">
 <form  method="post">
  <div class="form-group">
    <label for="name">name </label>
    <input type="text" class="form-control" name="name"  value="<?= $heroes->name ?>">
    
  </div>
  <div class="form-group">
    <label for="identity">identity </label>
    <input type="text" class="form-control" name="identity" value="<?= $heroes->identity ?>" >
    
  </div>
  <div class="form-group">
    <label for="power"> power </label>
    <input type="text" class="form-control" name="power"  value="<?= $heroes->power ?>">
    
  </div>
  
 <div class="form-group">
            <select class="form-control" name="universe">
            <option value="marvel">Marvel</option>
            <option value="dc">DC</option>

            </select>
 </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
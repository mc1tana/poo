
<?php 
require_once 'autoload.php';

include_once 'partials/header.php';
$id = isset($_GET['id']) ? trim($_GET['id']) : null;


$q=DataBase::get()->prepare ("SELECT * FROM `superheroe` WHERE `id`=:id ");
    // Préparation de la requete
   
    $q->bindValue(':id',$id);
    // Execution de la requete
    $q->execute();
    $q->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, superheroe::class);
    $heroes = $q->fetch(); // $film->title


if($_SERVER['REQUEST_METHOD']==='POST'){
 

  

$heroes->hydrate($_POST);
if($heroes->update($id)){
  echo '<div class="alert alert-success">le heore est bien modifié</div>';
}



header('location:read.php');

}



    




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
            <option value="marvel"<?= ($heroes->universe==='marvel') ? 'selected': '';?> >Marvel</option>
            <option value="dc"<?= ($heroes->universe==='dc') ? 'dc': '';?>>DC</option>

            </select>
 </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
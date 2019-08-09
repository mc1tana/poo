<!--
    intergreer une page html avec bootstrap
    ajouter form permetant de creer un super heros
    le form contient  name  power identity universe
    ajouter le traitement du form
    qunad le form est soumis on recup les dennees ds $_POST
    a partir des donnees on va creer une instance de SuperHeroe et hydrater ccelle-ci 
    reprendre la requete sql pour creer un super heros et on l'adapte pour pouvoir ajouter l'insta,ce creee
    precedement 
 -->


 
 <?php 
      require 'autoload.php';
     
     require_once 'partials/header.php';

     if($_SERVER['REQUEST_METHOD']==='POST'){
        
         
        
          
       
             $heroe= new SuperHeroe();
             $heroe->hydrate($_POST);
             
             if($heroe->save()){
                 echo '<div class="alert alert-success">le heros a ete ajouté</div>';
             }
             header('location:read.php');
         }
     
  ?>
<div class="container">
 <form  method="post">
  <div class="form-group">
    <label for="name">name</label>
    <input type="text" class="form-control" name="name" >
    
  </div>
  <div class="form-group">
    <label for="identity">identity</label>
    <input type="text" class="form-control" name="identity" >
    
  </div>
  <div class="form-group">
    <label for="power">power</label>
    <input type="text" class="form-control" name="power" >
    
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
     
<?php require_once 'partials/header.php'; ?>

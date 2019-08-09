
 
 <?php 
      require 'autoload.php';
     
     require_once 'partials/header.php';

     if($_SERVER['REQUEST_METHOD']==='POST'){
        
         
        
          
       
             $heroe= new Naughty();
             $heroe->hydrate($_POST);
             
             if($heroe->save()){
                 echo '<div class="alert alert-success">le heros a ete ajouté</div>';
             }
             header('location:readN.php');
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
    <label for="hobby">hobby</label>
    <input type="text" class="form-control" name="hobby" >
    
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

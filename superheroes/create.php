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
      require_once 'SuperHeroe.php';
      $name=null;
      $power=null;
      $identity=null;
      $universe=null;

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $errors=[];
        
        $name=isset($_POST['name'])? trim(htmlentities($_POST['name'])) : null;
        $power=isset($_POST['power'])? trim(htmlentities($_POST['power'])) : null;
        $identity=isset($_POST['identity'])? trim(htmlentities($_POST['identity'])) : null;
        $universe=isset($_POST['universe'])? trim(htmlentities($_POST['universe'])) : null;

         var_dump($_POST);

        if (strlen($name) <= 0) {
            $errors['name'] = "Le name ne doit pas être vide";
        }
        if (strlen($power) <= 0) {
            $errors['power'] = "Le power ne doit pas être vide";
        }
        if (strlen($identity) <= 0) {
            $errors['identity'] = "Le identity ne doit pas être vide";
        }

        if(empty($errors)){
            $heroe= new SuperHeroe();
            $heroe->hydrate($_POST);
            
            try{
                $db=new PDO("mysql:host=localhost;port=3306;dbname=superheroes;charset=utf8",'root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING]);
             
             }
             catch(Exception $e){
                 die('Erreur :'.$e->getmessage());
             }
             
             
             
             $sql="INSERT INTO superheroe (`name` , `power` , `identity`, `universe` ) VALUES (:name, :power, :identity, :universe)";
             
                    $q = $db->prepare($sql);
                     $q->bindvalue(':name', $heroe->name);
                     $q->bindvalue(':power', $heroe->power);
                     $q->bindvalue(':identity', $heroe->identity);
                     $q->bindvalue(':universe',$heroe->universe);
             
                     $q->execute();
        }
    }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
 </head>
 <body>
     
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

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
></script>
 </body>
 </html>
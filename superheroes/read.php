<?php   
      require_once 'autoload.php';
      
require_once 'partials/header.php';
$q=DataBase::get()->query("SELECT * FROM `superheroe` ");


    // Préparation de la requete
    
    
    // Execution de la requete
    
    // Récupération des données
    // Resultats sous forme de tableau associatif
    // $film = $q->fetch(PDO::FETCH_ASSOC); // $film['title']
    // Résultat sous forme d'objet stdClass 
    $heroes = $q->fetchAll(PDO::FETCH_OBJ); // $film->title
?>
 <div class="container mt-5">
     <div class="card shadow">
    <table class="table shadow text-center">
  <thead >
    <tr>
      <th scope="col">id</th>
      <th>photo</th>
      <th scope="col">name</th>
      <th scope="col">power</th>
      <th scope="col">identity</th>
      <th scope="col">universe</th>
      <th scope="col" >action</th>
    </tr>
  </thead>
  <tbody >
      <?php foreach($heroes as $heroe){ ?>
    <tr>
      <td scope="row"><?= $heroe->id ?></td>
      <td><img src="" ></td>
      <td><?= $heroe->name ?></td>
      <td><?= $heroe->power ?></td>
      <td><?= $heroe->identity ?></td>
      <td><?= $heroe->universe ?></td>
      <td>
       <a href="" class="btn btn-secondary">reveler</a>
      <a href="update.php?id=<?= $heroe->id ?>" class="btn btn-primary">modifier</a>
     <a href="delete.php?id=<?= $heroe->id ?>" class="btn btn-danger">suprimer</a>
      </td>

    </tr>
      <?php } ?>
  </tbody>
</table>
</div>
</div>
<?php
include_once 'partials/footer.php';
?>
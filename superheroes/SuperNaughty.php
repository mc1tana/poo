<?php
class Naughty{

    var $name;
    var $identiy;
    var $hobby;
    var $universe;
    public static $Naughty=[];
    public static function all(){
    
        return self::$Naughty;
      }

    public function hydrate($data){
    
        $this->name=trim($data['name']);
        $this->hobby=trim($data['hobby']);
        $this->identity=trim($data['identity']);
        $this->universe=trim($data['universe']);
 
       
 
  }
 
  public function save()
  {
   
  
   
  
  $q=DataBase::get()->prepare("INSERT INTO naughty (`name` , `hobby` , `identity`, `universe` ) VALUES (:name, :hobby, :identity, :universe)");
  
        
          $q->bindvalue(':name', $this->name);
          $q->bindvalue(':hobby', $this->hobby);
          $q->bindvalue(':identity', $this->identity);
          $q->bindvalue(':universe',$this->universe);
  
          return $q->execute();
 
  }
  public function update($id)
  {
   
  
   
  
  $q=DataBase::get()->prepare("UPDATE naughty SET `name`=:name, `hobby`=:hobby, `identity`=:identity, `universe`=:universe WHERE `id`=:id");
  
        
          $q->bindvalue(':name', $this->name);
          $q->bindvalue(':hobby', $this->hobby);
          $q->bindvalue(':identity', $this->identity);
          $q->bindvalue(':universe',$this->universe);
          $q->bindvalue(':id',$id);
 
  
          return $q->execute();
 
  }
 public function delete($id){

        $q=DataBase::get()->prepare("DELETE FROM naughty WHERE `id`=$id");
        $q->bindValue('id',$id);
        return $q->execute();
 }
 public static function find($id){
       


        $q=DataBase::get()->prepare ("SELECT * FROM `naughty` WHERE `id`=:id ");
            // Préparation de la requete
           
            $q->bindValue(':id',$id);
            // Execution de la requete
            $q->execute();
            $q->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, Naughty::class);
            return $q->fetch(); // $film->title
        
 }

public static function findall(){
        $q=DataBase::get()->query("SELECT * FROM `naughty` ");
        return $q->fetchAll(PDO::FETCH_OBJ);
}
}

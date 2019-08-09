<?php
//require_once 'DataBase.php';
class superheroe{
  var $name;
  var $power;
  var $identity;
  var $universe;
  public static $heroes=[];
  

  public function __construct($name=null , $power=null , $identity=null , $universe=null)
  {
      $this->name=$name;
      $this->power=$power;
      $this->identity=$identity;
      $this->universe=$universe;
  
      self::$heroes[]=  $this;
        
   }

 public function getRealIdentity()
 {
    return "l'identité de ".$this->name." est ".$this->identity.'<br>';
  }


  public function getUniverse()
  {
      return $this->name.' fait partie de l\'univers '.$this->universe.'<br>';
  }
//la fonction doit etre appelée sans avoir une instance de super SuperHeroe
  public static function all(){
    
    return self::$heroes;
  }


  public function hydrate($data){
       $this->name=trim($data['name']);
       $this->power=trim($data['power']);
       $this->identity=trim($data['identity']);
       $this->universe=trim($data['universe']);

      

 }

 public function save()
 {
  
 
  
 
 $q=DataBase::get()->prepare("INSERT INTO superheroe (`name` , `power` , `identity`, `universe` ) VALUES (:name, :power, :identity, :universe)");
 
       
         $q->bindvalue(':name', $this->name);
         $q->bindvalue(':power', $this->power);
         $q->bindvalue(':identity', $this->identity);
         $q->bindvalue(':universe',$this->universe);
 
         return $q->execute();

 }


}
<?php

class DataBase {
        public static $pdo;
  
    public static function get(){
            if(null===self::$pdo){
                self::$pdo=new PDO("mysql:host=localhost;port=3306;dbname=superheroes;charset=utf8",'root','',[PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING]);
            }
        
            return self::$pdo;
    }
       
     
   
}


<?php
class Dbconnect {
  const DB_HOST = "127.0.0.1:3306";
  const DB_NAME = "restaurant";
  const DB_USER = "root";
  const DB_PASS = "p@ssw9rd";
  private static $instance;
  private $conn;
  private function __construct() {
    try{
    $this->conn = new PDO("mysql:host=".self::DB_HOST.';dbname='.self::DB_NAME,self::DB_USER,self::DB_PASS);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    if($this->conn){
      echo "Connection Successful!";
    }
    }catch(Exception $e){
      echo $e->getMessage();
    }
  }
   static function getAccess(){
    if(self::$instance == null){
      self::$instance = new Dbconnect();
    }
    return self::$instance;
  }
  function getter(){
    return $this->conn;
  }
}


?>
<?php
require_once 'db.php';
class DAL{
  private $db;
  function __construct(){
    $this->db = Database::getInstance()->getter();
  }
  function getSingleShop($id){
    $stmt = $this->db->prepare("SELECT * FROM shops WHERE id=:id");
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    $stmt->bindColumn("name",$name);
    $stmt->bindColumn("ipadd",$ipadd);
    $result = $stmt->fetchObject();
    echo $result->name;
    echo $result->ipadd;
  }
  
  function getAllShop($state){
    $stmt = $this->db->prepare("SELECT * FROM shops WHERE state=:state");
    $stmt->bindParam(":state",$state);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($result as $item){
      echo $item->name."<br>";
      echo $item->ipadd."<br>";
      echo $item->username."<br>";
      echo $item->created_at."<br>";
      echo "<hr>";
    }
  }
  
}
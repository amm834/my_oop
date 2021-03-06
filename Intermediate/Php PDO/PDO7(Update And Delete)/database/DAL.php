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
  /*
Insert Single Data
  */
  function insertSingleData($name,$ipadd,$username,$password,$state){
$datty = date("Y-m-d H:m:s");
    $stmt = $this->db->prepare("insert into shops (name,ipadd,username,password,state,created_at) values (:name,:ipadd,:username,:password,:state,:created_at)");
    $stmt->bindParam(":name",$name);
    $stmt->bindParam(":ipadd",$ipadd);
    $stmt->bindParam(":username",$username);
    $stmt->bindParam(":password",$password);
    $stmt->bindParam(":state",$state);
    $stmt->bindParam(":created_at",$datty);
    $stmt->execute();

  }
  function insertMultipleData($shops){
    $stmt = $this->db->prepare("insert into shops (name,ipadd,username,password,state,created_at) values (:name,:ipadd,:username,:password,:state,:created_at)");
    $datty = date("Y-m-d H:m:s");
    foreach ($shops as $shop){
      $stmt->bindParam(":name",$shop[0]);
      $stmt->bindParam(":ipadd",$shop[1]);
      $stmt->bindParam(":username",$shop[2]);
      $stmt->bindParam(":password",$shop[3]);
      $stmt->bindParam(":state",$shop[4]);
      $stmt->bindParam(":created_at",$datty);
      $liid = $this->db->lastInsertId();
      $result = $stmt->execute();
      echo $result ? "$liid is successfully inserted<br>":"Fail";
    }
  }
  
  function updateData($id,$name){
    $stmt = $this->db->prepare("update shops set name=:name where id=:id");
    $stmt->bindParam(":id",$id);
    $stmt->bindParam(":name",$name);
    $result = $stmt->execute();
    echo $result ?'success':'Fail';
  }
  function deleteData($id){
    $stmt = $this->db->prepare("delete from shops where id=:id");
    $stmt->bindParam(":id",$id);
    $result = $stmt->execute();
    echo $result  ? "Syccess" : "Fail";
  }
}
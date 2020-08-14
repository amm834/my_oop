<?php
require_once 'database/dal.php';

class Index extends DAL {

  function __construct($db_host, $db_name,$db_user, $db_pass) {
    parent::__construct($db_host, $db_name,$db_user, $db_pass);
  }

  function connect() {
   if($this->db = null){
     $this->db = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_name,$this->db_user,$this->db_pass);
   }
   return $this->db;
   }
   function disconnect(){
     
   }
   
  }




$db = new Index("127.0.0.1:3306","restaurant","root","p@ssw9rd");
$db->connect(); 


?>
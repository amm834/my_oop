<?php

abstract class DAL {
  protected $db;
  protected $db_host;
  protected $db_name;
  protected $db_user;
  protected $db_pass;
  function __construct($db_host, $db_name,$db_user, $db_pass) {
    $this->db_host = $db_host;
    $this->db_user = $db_user;
    $this->db_pass = $db_pass;
    $this->db_name = $db_name;
  }
  abstract  function connect();
  abstract  function disconnect();
  
  

}

?>
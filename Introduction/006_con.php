<?php

class Destr{
  function __construct(){
    echo "Hello World";
  }
  function __destruct(){
    echo "Hi World";
  }
}
$gm = new Destr;

?>
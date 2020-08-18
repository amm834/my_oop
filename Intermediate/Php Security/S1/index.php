<?php
ini_set("display_errors","off");
phpinfo();
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $id = $_POST['uname'];
 $host = "127.0.0.1:3306";
  $db = new PDO("mysql:host=$host;dbname=restaurant","root","p@ssw9rd");
  
  $stmt = $db->prepare("select * from shops where name=:id");
  $stmt->bindValue(":id",$id,PDO::PARAM_STR);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_OBJ);
  echo "<pre>".print_r($result,true)."</pre>";
}else {
  $a = $_GET['url'];
  echo $a;
  if($a == 1)
  echo 1;
  
}
?>
<form action="<?php $_SLEF_PHP ?>" method="post">
  <input type="text" placeholder="Type Something" name="uname">
  <br>
  <input type="submit" value="Login">
</form>

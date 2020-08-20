<?php
$pass = "123";
echo $hashPass;
$equalPass = '$2y$10$kMjGXMlqLB.vZQpISfHquuQXYrcEPh.EuU4bxj516fm8kNOZRAkfS';
$con = password_verify($pass,$equalPass);
echo $con ? "Password is True":"Wrong Pasword";
?>
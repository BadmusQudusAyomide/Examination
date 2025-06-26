<?php

$host = "193.180.215.213";
$port = "64321";
$user = "user_77c31690";
$pass = "5e0e82c123bce1465227a54d5db0e8f3";
$db = "db_31f6ac6a";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};port={$port};dbname={$db};", $user, $pass);
} catch (Exception $e) {

}


?>
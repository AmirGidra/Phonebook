<?php

$serverName ="localhost";
$userName = "root";
$password = "";
$dbName = "spisakradnika";


$conn = mysqli_connect($serverName, $userName, $password, $dbName);
  if (!$conn) {
  	die("Neuspjela konekcija!" . mysqli_connect_error());
  }
  mysqli_set_charset($conn, "utf8");


?>
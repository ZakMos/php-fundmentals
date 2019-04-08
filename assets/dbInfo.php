<?php

$dbPassword = "PHPFundamentals";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "PHPFundamentals";


$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);



if($connection->connect_error) {
  exit("Database Connectin Faild. Reason: ".$connection->connect_error) ;
}



 ?>

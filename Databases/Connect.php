<?php

$dbPassword = "PHPFundamentals";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "PHPFundamentals";


// mysqli::_construct([string $host] [,string $password][,string $dbname][,string $port] [,string $socket])
$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

print_r($connection);

if($connection->connect_error){
  exit("Database Connectin Faild. Reason: ".$connection->connect_error) ;
}


 ?>

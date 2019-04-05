<?php

$dbPassword = "PHPFundamentals";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "PHPFundamentals";


$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);



if($connection->connect_error) {
  exit("Database Connectin Faild. Reason: ".$connection->connect_error) ;
}

$query = "SELECT first_name, last_name, pen_name FROM Authors ORDER BY first_name";

$resultObj = $connection->query($query);

if($resultObj->num_rows > 0) {
  while($singleRowFromQuery = $resultObj->fetch_assoc()){
    // print_r($singleRowFromQuery);
    echo "Author: ".$singleRowFromQuery[ 'first_name'].PHP_EOL;
  }
}

$resultObj->close();
$connection->close();


 ?>

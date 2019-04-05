<?php

$dbPassword = "PHPFundamentals";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "PHPFundamentals";


$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);



if($connection->connect_error) {
  exit("Database Connectin Faild. Reason: ".$connection->connect_error) ;
}

$query = "INSERT INTO Authors (first_name, last_name, pen_name) VALUES ('John Ronald Reuel', 'Tolkien', 'J. R. R. Tolkien')";

$connection->query($query);

echo "Newly Created Author Id: ".$connection->insert_id;


$connection->close();


 ?>

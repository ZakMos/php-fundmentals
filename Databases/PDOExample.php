<?php

$dbPassword = "PHPFundamentals";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

// the deference between MySQLI and PDO example (file name Select.php)

// MYSQLI
// $connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);
$connection = new PDO('mysql:host='.$dbServer.';dbname='.$dbName, $dbUserName, $dbPassword);

$query = "SELECT first_name, last_name, pen_name FROM Authors ORDER BY first_name";

$resultObj = $connection->query($query);

// MYSQLI
// if($resultObj->num_rows > 0) {
if($resultObj->rowCount() > 0) {
  //MYSQLI
  //while($singleRowFromQuery = $resultObj->fetch_assoc()){

  foreach($resultObj as $singleRowFromQuery){
    echo "Author: ".$singleRowFromQuery[ 'first_name'].PHP_EOL;
  }
}

// MYSQLI
// $resultObj->close();
// $connection->close();

$resultObj = null;
$connection = null;


 ?>

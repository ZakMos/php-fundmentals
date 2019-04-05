<?php

$dbPassword = "PHPFundamentals";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "PHPFundamentals";


$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);



if($connection->connect_error) {
  exit("Database Connectin Faild. Reason: ".$connection->connect_error) ;
}

// DELETE Query
// $query = "DELETE FROM authors WHERE id = 4";


// UPDATE Query
// $query = "UPDATE Authors SET pen_name = 'L. M. Montgomery' WHERE id = 2";

// INSERT QUery
$query = "INSERT INTO Authors (first_name, last_name, pen_name) VALUES ('Arthur Igatius Conan', 'Doyle', 'Sir Arthur Igatius Conan Doyle')";

// mixed mysqli:: query(string $query [,int $resultMode = MYSQLI_STORE_RESULT])
$connection->query($query);


$connection->close();


 ?>

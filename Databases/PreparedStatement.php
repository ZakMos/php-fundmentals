<?php

$dbPassword = "PHPFundamentals";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "PHPFundamentals";


$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);



if($connection->connect_error) {
  die("Failed to Connectin to the Database. Reason: ".$connection->connect_error) ;
}

$tempFirstName = 'Lucy Maud';
$query = "SELECT first_name, last_name, pen_name FROM Authors WHERE first_name = ?";


// method prepare. lets php know that we will be sending our values later
// we save the call to a variable just like the query method.
// This variable is now referred to as the statment object
$statemntObj = $connection->prepare($query);

// method bind_param can take as many parameters that are needed to coincide
// with place holders or question marks in query
// mixed mysqli:: bind_param(string $types, mixed &$var1 [ mixed &])
// the first is a type stream and the second is a value pertaining to the query.
// "s" pasing in will be a string
// for example "sdi": s= string, d= decimal or floating point, i= integer

$statemntObj->bind_param("s", $tempFirstName);

// execute takes parameters and inserts them into the query string at the appropriate locations
$statemntObj->execute();

$statemntObj->bind_result($firstName, $lastName, $penName);
$statemntObj->store_result();

if ($statemntObj->num_rows > 0) {
  while ($statemntObj->fetch()) {
    echo $firstName. " ".$lastName. " (".$penName.")".PHP_EOL;
    // output = Lucy Maud Montgomery (L. M. Montgomery)
  }
}


$statemntObj->close();
$connection->close();


 ?>

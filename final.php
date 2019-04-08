<?php
  echo "<pre>";
  print_r($_GET);
  echo "<pre>";

  echo $_GET['author'];
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Fundamentals</title>
    <link rel="stylesheet" href="assets/styles.css" type="text/css">
  </head>
  <body>
    <div id="Header">
      <img src="assets/Dickens_Gurmey_head.jpg" border="0" alt="">
        <h2>Mailing List Information</h2>
    </div>
    <div id="Body">
      <div class="">
        <label for="">Favorite Author:</label>
        <span>&bsp;</span>
      </div>
      <div class="">
        <label for="">Favorite Century:</label>
        <span><?=$postData['century']?>&nbsp;</span>
      </div>
      <div class="">
        <label for="">Comments:</label>
        <span><?=$postData['comments']?>&nbsp;</span>
      </div>
      <div class="">
        <label for="">Name:</label>
        <span><?=$postData['name']?>&nbsp;</span>
      </div>
      <div class="">
        <label for="">E-mail Address:</label>
        <span><?=$postData['email']?>&nbsp;</span>
      </div>
    </div>
  </body>
</html>

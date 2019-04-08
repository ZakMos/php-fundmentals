<?php

  include 'assets/include.php';
  require 'assets/dbInfo.php';

  $query = "SELECT id, first_name, last_name, pen_name FROM Authors ORDER BY first_name";
  $resultObj = $connection->query($query);

  if(count($_POST) > 0) {

    if($_POST['email'] != "") {
      // $_SESSION['formWasPosted'] = 'yes';
      $_SESSION['formPostData'] = $_POST;
      header('Location: final.php');
    } else {
      $emailEroor = "validation";
    }
  }
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
        <h2>
          Join Our Literature
            <p>Mailing List</p>
        </h2>
    </div>
    <div id="Body">
      <form method="post" action="index.php" >
        <div>
          <label>Favorite Author</label>
            <select name="author">
              <?php while($row = $resultObj->fetch_assoc()) : ?>
                <option value="<?=$row['id']?>"><?=$row['first_name']?> <?=$row['last_name']?></option>
              <?php endwhile; ?>
            </select>
        </div>
        <div class="multiple">
          <label for="century">Favorite Century:</label>
          17th Century <input type="checkbox" name="century[]" value="17th">
          18th Century <input type="checkbox" name="century[]" value="18th">
          19th Century <input type="checkbox" name="century[]" value="19th">
        </div>
        <div>
          <label>Comments:</label>
          <textarea type="text" name="comments"></textarea>
        </div>
        <div>
          <label>Name:</label>
          <input type="text" name="name">
        </div>
        <div class="<?=$emailEroor?>">
          <label for="">E-mail Address:</label>
          <input type="text" name="email">
        </div>
        <div class="multiple">
            <label>Receive Newsletter:</label>
            Yes <input type="radio" name="newsletter" value="no">
            No <input type="radio" name="newsletter" value="yes">
        </div>
        <div class="multiple">
          <label>&nbsp;</label>
          <input type="submit" name="submit" value="Submit - Join Mailing List">
        </div>
      </form>
    </div>
  </body>
</html>

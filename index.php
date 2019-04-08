<?php
  require 'assets/dbInfo.php';

  $query = "SELECT id, first_name, last_name, pen_name FROM Authors ORDER BY first_name";
  $resultObj = $connection->query($query);

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
      <form class="" action="final.php" method="get">
        <div class="">
          <label for="author">Favorite Author</label>
            <select class="" name="author">
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
        <div class="">
          <label for="">Comments:</label>
          <textarea type="text" name="comments" value=""></textarea>
        </div>
        <div class="">
          <label for="">Name:</label>
          <input type="text" name="name" value="">
        </div>
        <div class="">
          <label for="">E-mail Address:</label>
          <input type="text" name="email" value="">
        </div>
        <div class="multiple">
          <div class="multiple">
            <label for="century">Receive Newsletter:</label>
            Yes <input type="radio" name="" value="yes">
            No <input type="radio" name="" value="no">
          </div>
        </div>
          <button type="submit" name="button">Submit</button>
      </form>
    </div>
  </body>
</html>

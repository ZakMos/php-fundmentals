
<?php

  function bookByAuthor($authorName) {
    echo $authorName;
  }

    // bookByAuthor("William Shekespeare");

  $authorName = "William Shekespeare";

  bookByAuthor($authorName);




  // more than one variable
   function bookByAuthorYear($authorName, $year) {
      echo $year;
      echo "\n";
      echo $authorName;
   }

   $year = 1910;
   $authorName = "William Shekespeare";

   bookByAuthorYear($authorName, $year);

 ?>

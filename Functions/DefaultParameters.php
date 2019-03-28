<?php

   function bookByAuthorYear($authorName, $tempYear = 1910) {
      echo $tempYear;
      echo "\n";
      echo $authorName;
   }

   $year = 1920;
   $authorName = "William Shekespeare";

   bookByAuthorYear($authorName, $year); // output 1920 William Shekespeare
   bookByAuthorYear($authorName); // output 1910 William Shekespeare
 ?>

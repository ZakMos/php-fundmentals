<?php

   function bookByAuthorYear($authorName, $tempYear = 1910) {
      echo $tempYear;
      echo "\n";
      echo $authorName;
   }

   function getAuthor() {
     return "Charles Dickens";
   }


   $year = 1920;
   $authorName = getAuthor();;

   bookByAuthorYear($authorName, $year); // output 1920 Charles Dickens

 ?>

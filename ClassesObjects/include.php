<?php

include 'Person.php';
// include 'Author.php';
include_once 'Author.php';


$newAuthor = new Author("Samuel Langhorne", "Clements", 1899);
echo $newAuthor->getCompleteName();


 ?>

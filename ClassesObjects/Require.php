<?php

include 'Person.php';
include_once 'Author.php';

// require is terminate script,,, include will continue the rest of the script
// where require will terminate at the point it can't find the necessary file.
require "RandomClass.php"; // example ,, this file doesn't exist ..

$newAuthor = new Author("Samuel Langhorne", "Clemens", 1899);
echo $newAuthor->getCompleteName();

 ?>

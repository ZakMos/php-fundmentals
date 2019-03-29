<?php
$authors = array(
  "Charles Dickens",
  "Jane Austin",
  "William Shakespeare",
  "Mark Twain"
);

  // int array_push(array $array, mixed $value1 [,mixed $...])

  array_push($authors, "Luisa May Alcoot");
  $authors[] = "L.M Montgomery";
  $authors['nice'] = "test";
  print_r($authors);

 ?>

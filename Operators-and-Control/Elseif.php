<?php

$authors = ["Charles Dickens", "Jane Austin", "William SHakespeare", "Mark Twain", "Louisa May Alcott"];
// $authors = [];
// $authors = ["Charles Dickens"];

$count = count($authors);

if($count == 1) { // $authors = ["Charles Dickens"];
  echo "There is a 1 author";
}
  elseif($count > 1) {
  echo "There is a total of  " .$count. " author(s).";
}
  else { // $authors = [];
  echo "There are no authors";
}



 ?>

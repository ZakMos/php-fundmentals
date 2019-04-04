<?php

// $authors = ["Charles Dickens", "Jane Austin", "William SHakespeare", "Mark Twain", "Louisa May Alcott"];
$authors = [];
// $authors = ["Charles Dickens"];
$count = count($authors);

/*
    switch ($variable) {
      case 'val':
        break;
    }
*/

switch($count) {
  case 0:
      echo "There are no authors".PHP_EOL;
      break; // using break to stop reading the whole code
  case 1:
      echo "There is a 1 author".PHP_EOL;
      break;
  default:
      echo "There is a total of  " .$count. " authors.".PHP_EOL;
      break;
}

switch(5 <=> 7) {
    case 1:
        echo "Greater Than";
        break;
    case 0:
        echo "Equal";
        break;
    case -1:
        echo "Less Than";
        break;
}


// if($count == 1) { // $authors = ["Charles Dickens"];
//   echo "There is a 1 author";
// }
//   elseif($count > 1) {
//   echo "There is a total of  " .$count. " author(s).";
// }
//   else { // $authors = [];
//   echo "There are no authors";
// }



 ?>

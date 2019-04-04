<?php

// endfor;, endwhile;, endif;, endforeach;, endswitch;


$readingIsFun = true;
$authors = ["Charles Dickens", "Jane Austin", "William Shakespeare", "Mark Twain", "Louisa May Alcott"];
$count = count($authors);

if($count > 0) :
    echo "There is a total of ".$count." author(s).".PHP_EOL;
  else :
    echo "There are no authors.".PHP_EOL;
  endif;
  while ($readingIsFun) :
    echo "Reading is fun!".PHP_EOL;
    $readingIsFun = false;
  endwhile;
  for($i = 1; $i <= 5; $i++) :
    echo "Reading is fun!".PHP_EOL;
  endfor;

 ?>

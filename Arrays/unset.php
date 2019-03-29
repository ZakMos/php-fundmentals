<?php
$authors = array(
  "Charles Dickens",
  "Jane Austin",
  "William Shakespeare",
  "Mark Twain"
);

// void unset(mixed $var[,mixed $...])

$authorsAssociative = array(
        "quarky" => "Charls Dickens",
        "brilian" => "Jane Austin",
        "Poetic" => "William Shakspeare"
);

unset($authors[1], $authors[0]); // delete array 0 and 1
unset($authorsAssociative['Poetic']); // delete array 'Poetic'
unset($authors); // === undefined variable 

print_r($authors);
print_r($authorsAssociative);

 ?>

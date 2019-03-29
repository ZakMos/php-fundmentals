<?php

$authors = array(
  "Charles Dickens",
  "Jane Austin",
  "William Shakespeare",
  "Mark Twain",
  "Louisa May Alcot"
);

  // bool sort(array &array[, int$sort_flags = SORT_REGULAR])

$authorsAssociative = array(
        "quarky" => "Charls Dickens",
        "brilian" => "Jane Austin",
        "Poetic" => "William Shakspeare"
);

sort($authors); // sort() sort the numbers as number sorting 0-1-2-3-4
// asort($authors); // asort() sort the numbers as actual number sorting 0-1-4-3-2

// sort($authorsAssociative); /// sort only numbers
ksort($authorsAssociative); // ksort sort by key



print_r($authors);
print_r($authorsAssociative);


 ?>

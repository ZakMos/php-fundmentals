<?php
$authors = array(
  "Charles Dickens",
  "Jane Austin",
  "William Shakespeare",
  "Mark Twain",
  "Louisa May Alcott",
  13
);

// bool in_array(mixed $needle, array $haystack[,bool $strict = FALSE])

echo in_array("Jane Austin", $authors); // = 1 = true
echo in_array("any", $authors); // = nothing = false not excisted
echo in_array(13, $authors, true); // = 1 = true
echo in_array("13", $authors, true); // = nothing = false not excisted

 ?>

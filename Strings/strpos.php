<?php
  $quote = "Courage is resistance to fear, mastery of fear, not absence of fear.";

  // mixed strpos(string $haystack, mixec $needle[, int $offset = 0])
  echo strpos($quote, "fear", 26); // = 25 the position ,, with 26 = 42
  echo strpos($quote, "C"); // = 0 the position

 ?>

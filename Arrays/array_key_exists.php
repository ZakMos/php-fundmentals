<?php
  $authors = array(
          "Charls Dickens",
          "Jane Austin",
          "William Shakspeare"
  );

  $authorsAssociative = array(
          "quarky" => "Charls Dickens",
          "brilian" => "Jane Austin",
          "Poetic" => "William Shakspeare"
  );
  echo $authors[1];
  echo $authorsAssociative['quarky'];
  echo array_key_exists(2, $authors);
  echo array_key_exists('Poetic', $authorsAssociative);

 ?>

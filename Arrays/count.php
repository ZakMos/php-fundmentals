<?php
$authors = array(
  "Charles Dickens",
  "Jane Austin",
  "William Shakespeare",
  "Mark Twain",
  "Louisa May Alcot"
);

echo count($authors); // output 5


$authors1 = [
        "Male" => array(
            "Charlse Dickens" => array("A Christms Carol", "Oliver Twist"),
            "William Shakespeare" => array("Rome & Juliet", "Richard III"),
            "Mark Twain" => array("Tom Sawyer", "Huck Finn")
        ),
        "Female" => array(
          "L. M. Montgomery" => array("Anne of Green Gables", "Anne of Avonlea"),
          "Louisa May Alcott" => array("Little Women")
        )
];

echo count ($authors1); // output 2
echo count($authors1, 1); // output 16 ,,,, count every single element in array
// same code
echo count($authors1, COUNT_RECURSIVE); // output 16 ,,,, count every single element in array

// int count(mixed $array_or_countable [, int $mode = COUNT_NORMAL])

 ?>

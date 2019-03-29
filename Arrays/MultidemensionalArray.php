<?php

$authors = [
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

print_r($authors); /// print all arrays
print_r($authors["Male"]); // only array under Male
print_r($authors["Male"] ["Mark Twain"]); // only array under Mark Twain
print_r($authors["Male"] ["Mark Twain"] [1]); /// only 1st array in Mark Twain


 ?>

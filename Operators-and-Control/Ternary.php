<?php

$authors = ["Charles Dickens", "Jane Austin", "William SHakespeare", "Mark Twain", "Louisa May Alcott"];
$count = count($authors);


// (expr1) ? (expr2) : (expr3)


// $outcome = ($count > 0 ) ? "Author Total: ".$count : "No Authors";

$outcome = ($count > 6 ) ? "Author Total: ".$count : "No Authors";
echo $outcome;


 ?>

<?php

$authors = [];
$count = count($authors);


// $outcome = $count ? $count : "Count Unavailable";

// ?? null Coalesce
$outcome = $count ?? "Count Unavailable";

$outcome = $count ?? $anotherVariable ?? "Count Unavailable";

echo $outcome;


 ?>

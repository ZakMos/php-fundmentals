<?php

$var1 = (6 < 7);
$var2 = (8 == 8);

var_dump($var1); // output true
var_dump($var2);  // output true

var_dump($var1 && $var2);  // output true
var_dump($var1 || $var2);  // output true
var_dump(!$var1);  // output false
var_dump(!$var2);  // output false

echo " change var to true and false var3 var4   ";

$var3 = true;
$var4 = false;

var_dump($var3); // output true
var_dump($var4);  // output false

var_dump($var3 && $var4);  // output false
var_dump($var3 || $var4);  // output true
var_dump(!$var3);  // output false
var_dump(!$var4);  // output true

/*
  Condition using &&
  Condition 1           Condition 2         Outcome
  TRUE                  TRUE                  TRUE
  TRUE                  FALSE                 FALSE
  FLASE                 TRUE                  FALSE
  FALSE                 FALSE                 FALSE
  ======================================================

  Condition using ||
  Condition 1           Condition 2         Outcome
  TRUE                  TRUE                  TRUE
  TRUE                  FALSE                 TRUE
  FLASE                 TRUE                  TRUE
  FALSE                 FALSE                 FALSE
*/

 ?>

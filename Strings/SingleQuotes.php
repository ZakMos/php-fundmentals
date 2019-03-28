<?php
  $currency = 'penny';

  $sampleString = "A $currency saved is a $currency earned";
  // Return A penny saved is a penny earned

  $sampleString = 'A $currency saved is a $currency earned';
  // Return A $currency saved is a $currency earned

  // echo $sampleString;

  // $misc = 'St. Patrick's Day';  //  return Error

  $misc = 'St. Patrick\'s Day';
  echo $misc;

 ?>

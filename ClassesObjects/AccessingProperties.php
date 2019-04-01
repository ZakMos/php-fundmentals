<?php
  class Person {
    public $firstName = "Samuel Langhorne";
    public $lastName = "Clemens";
    public $yearBorn = 1899;
  }

$myObject = new Person();

echo $myObject->firstName;

$myObject->firstName = "S. L.";

echo $myObject->firstName;

 ?>

<?php
  class Person {

    // Constant
    const AVG_LIFE_SPAN = 79;

    // Properties
    public $firstName = "Samuel Langhorne";
    public $lastName = "Clemens";
    public $yearBorn = 1899;

    // Methods
    public function getFirstName() {
      return $this->firstName;
    }
    public function setFirstName($tempName) {
      $this->firstName = $tempName;
    }
  }

$myObject = new Person();

$myObject->setFirstName("Sam");
echo $myObject->firstName; // output Sam
echo $myObject->getFirstName(); // output Sam







 ?>

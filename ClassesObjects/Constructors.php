<?php
  class Person {

    // Constant
    const AVG_LIFE_SPAN = 79;

    // Properties
    public $firstName;
    public $lastName;
    public $yearBorn;

    // function__construct([mixed $var,...])

    function __construct() {
      // echo "I'm in the constructor";
      $this->firstName = "Samuel Langhorne";
      $this->lastName = "Clemens";
      $this->yearBorn = 1999;
    }

    // Methods
    public function getFirstName() {
      return $this->firstName;
    }
    public function setFirstName($tempName) {
      $this->firstName = $tempName;
    }
  }

$myObject = new Person();

echo $myObject->getFirstName();




 ?>

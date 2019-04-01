<?php
  class Person {

    // Constant
    const AVG_LIFE_SPAN = 79;

    // Properties
    public $firstName;
    public $lastName;
    public $yearBorn;

    // function__construct([mixed $var,...])

    function __construct($tempFirst = "", $tempLast = "", $tempBorn= "") {
      // echo "I'm in the constructor";
      $this->firstName = $tempFirst;
      $this->lastName = $tempLast;
      $this->yearBorn = $tempBorn;
    }

    // Methods
    public function getFirstName() {
      return $this->firstName;
    }
    public function setFirstName($tempName) {
      $this->firstName = $tempName;
    }
  }

$myObject = new Person("Samuel Langhorne", "Clemans", 1899);

echo $myObject->getFirstName();




 ?>

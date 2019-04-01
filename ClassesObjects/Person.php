<?php
class Person {

  // Constant
  const AVG_LIFE_SPAN = 79;

  // Properties
  private $firstName;
  private $lastName;
  private $yearBorn;

  // function__construct([mixed $var,...])

  function __construct($tempFirst = "", $tempLast = "", $tempBorn= "") {
    $this->firstName = $tempFirst;
    $this->lastName = $tempLast;
    $this->yearBorn = $tempBorn;
  }

  // Methods
  public function getFirstName() {
    // PHP_EOL takes the place of \n. The EOL stands for End of Line.
    return $this->firstName.PHP_EOL;
  }
  public function setFirstName($tempName) {
    $this->firstName = $tempName;
  }

  protected function getFullName() {
    return $this->firstName. " " .$this->lastName.PHP_EOL;
  }
}



 ?>

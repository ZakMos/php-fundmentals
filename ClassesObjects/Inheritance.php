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
      echo "Person constructor".PHP_EOL;
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

    Public function getFullName() {
      echo "Person->getFullName()".PHP_EOL;
      return $this->firstName. " " .$this->lastName.PHP_EOL;
    }

  }

class Author extends Person {
  Public $penName = "Mark Twain";
  public function getPenName() {
    return $this->penName.PHP_EOL;
  }

  Public function getFullName() {
    echo "Author->getFullName()".PHP_EOL;
    return $this->firstName. " " .$this->lastName.PHP_EOL;
  }
}

$newAuthor = new Author("Samuel Langhorne", "Clemens", 1899);
echo $newAuthor->getFullName();


 ?>

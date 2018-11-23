<?php
  class Customer
  {
    protected $firstName;
    protected $lastName;
    public static $species;

    public function __construct($fname="John", $lname="Doe")
    {
      $this->firstName = $fname;
      $this->lastName = $lname;
    }

    public function __destruct()
    {
      print("cleanup");
    }

/*    public function getFirstName()
    {
     return $this->firstName;
    }
    public function setFirstName($fname)
    {
     $this->firstName = $fname;
    }
*/
    public function getFirstName()
    {
       print("in Customer getFirstName");
       return $this->firstName;
    }
    public function setFirstName($fname)
    {
       print("in Customer setFirstName");
       $this->firstName = $fname;
    }
    public function getLastName()
    {
      return $this->lastName;
    }
    public function setLastName($lname)
    {
      $this->lastName = $lname;
    }

    public static function printSpecies()
    {
      print("WooHoo! It Worked! " . self::$species);
    }

    public function __toString()
    {
      //print("This is a customer");
      return "This is a customer";
    }
  }
?>

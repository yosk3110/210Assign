<?php
  include_once 'Customer.php';
  /**
   *
   */
  class VIPCust extends Customer
  {
    private $DiscPercent;
    function __construct($CustomerId, $CustFirstName, $CustLastName, $DPercent)
    {
      parent::__construct($CustomerId, $CustFirstName, $CustLastName);
      $this->DiscPercent = $DPercent;
    }

    public function getDiscPercent(){
      return $this->DiscPercent;
    }
    public function setDiscPercent($new){
      $this->DiscPercent = $new;
    }
  }

?>

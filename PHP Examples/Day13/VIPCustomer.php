<?php
//   include("Customer.php");

   class VIPCustomer extends Customer
   {
     private $discPercent;

     public function getDiscPercent()
     {
       return $this->discPercent;
     }
     public function setDiscPercent($disc)
     {
       $this->discPercent = $disc;
     }

     public function calcDiscAmount($amount)
     {
       //calculate discount and return it
     }


   }
?>

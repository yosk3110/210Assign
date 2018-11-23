<?php
   include_once("Customer.php");
   include("VIPCustomer.php");
/*   $c1 = new Customer();
   $c1->setFirstName("fred");
   $c1->setLastName("flintstone");
   $c2 = new Customer();
   $c2->setFirstName("george");
   $c2->setLastName("jetson");
   */
/*   Customer::$species = "human";
   $c1 = new Customer("fred", "flintstone");
   $c2 = new Customer("george", "jetson");
   $c3 = new Customer();
   */
   $c4 = new VIPCustomer();
   $c4->setFirstName("barney");
   $c4->setLastName("rubble");
   //echo($c1);
   print("c4 firstname:" . $c4->getFirstName() . "<br />");
   print("c4 lastname:" . $c4->getLastName() . "<br />");
/*   print("c1 firstname:" . $c1->getFirstName() . "<br />");
   print("c1 lastname:" . $c1->getLastName() . "<br />");
   unset($c1);
   print("c2 firstname:" . $c2->getFirstName() . "<br />");
   print("c2 lastname:" . $c2->getLastName() . "<br />");
   print("c3 firstname:" . $c3->getFirstName() . "<br />");
   print("c3 lastname:" . $c3->getLastName() . "<br />");
   print("Species: " . Customer::$species);
   print("Species: " . Customer::printSpecies());
*/
?>

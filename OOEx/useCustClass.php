<?php
  include("Customer.php");
  include 'VIPCust.php';

  function makePhoneBookName($cust){
    return $cust->getCustLastName().",".$cust->getCustFirstName();
  }

  $customers = array();
  $customers[] = new Customer(100,"Sam", "Neil");
  print("ID: ".$customers[0]->getCustomerId()."<br>");
  print("First Name: ".$customers[0]->getCustFirstName()."<br>");
  print("Last Name: ".$customers[0]->getCustLastName()."<br>");

  $c2 = new Customer(100,"Sam", "Neil");
  $customers[] = $c2;
  $c2->setCustFirstName("Bill");
  print("ID: ".$customers[1]->getCustomerId()."<br>");
  print("First Name: ".$customers[1]->getCustFirstName()."<br>");
  print("Last Name: ".$customers[1]->getCustLastName()."<br>");

  print("---------------------------------<br>");

  $customers[] = new VIPCust(3,"Jane","Doe",.1);
  foreach ($customers as $cust) {
    print("ID: ".$cust->getCustomerId()."<br>");
    print("First Name: ".$cust->getCustFirstName()."<br>");
    print("Last Name: ".$cust->getCustLastName()."<br>");
    if(get_class($cust) == "VIPCust"){
      print("Discount %: ".$cust->getDiscPercent()."<br>");
    }
  }

  print("<ol>");
  print("<li>".makePhoneBookName($customers[0])."</li>");
  print("<li>".makePhoneBookName($customers[1])."</li>");
  print("</ol>");

?>

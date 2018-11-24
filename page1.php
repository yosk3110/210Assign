<?php
  $myArray = array(1 ,"two");
  $myArray[] = 3;
  $myArray["banana"] = "yellow";
  $myArray[8] = "three";
  print_r($myArray);
  print("<br>");

  $fruits = array('orange' => "orange", "apple" => "red", "blueberry" => "blue");
  $keys = array_keys($fruits);
  foreach ($keys as $key) {
    print("Key: $key, Value: $fruits[$key] <br>");
  }
  include "Agent.php";

  $agent = array();
  $agent["AgtFirstName"] = "Fred";
  $agent["AgtMiddleInitial"] = "S";
  $agent["AgtLastName"] = "Smith";
  $agent["AgtBusPhone"] = "403-123-4567";
  $agent["AgtEmail"] = "fred@travelexperts.com";
  $agent["AgtPosition"] = "Junior Agent";
  $agent["AgencyId"] = 1;
  $agent["AgtPassword"] = "password";
  //print_r($agent);
  $aObject = new Agent($agent);
  print("<br>");
  print($aObject->toString());
  print("<br>");
  print($aObject::TABLENAME);
  print("<br>");
  print_r($aObject->getArray());
  print("<br>");
  print($aObject->getAgtPosition());
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Page 1</title>
  </head>
  <body>

  </body>
</html>

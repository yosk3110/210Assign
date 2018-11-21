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

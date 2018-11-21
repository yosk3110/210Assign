<?php
  $packageName = "Two weeks in Red Deer";
  $price = 12000;
  $numberOfTravelers = 33;
  define("GST", 0.05);  //constant
  define("PST", 0.07);
  function printTicket($num){
    global $packageName;  //in php global has to be declared to find global variables
    print("-------------<br>");
    for ($i=1; $i <= $num; $i++) {
      print("$i: Admission for 1 to Package: $packageName <br>");
      print("-------------<br>");
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!--For php to run, the file extnetion has to be .php-->
    <?php
      $hello = "Hello World";
      $x = 3.14;
      echo "<h1>", $hello, "</h1>";
      print("<h2>$hello</h2>"); //you can directly embed variables into strings
      echo "Hello <br>";
      print("Hello World<br>");
      print "\$x = $x <br>";
      //print(`dir`); //The ` ` allows the execution of system commands
    ?>
    <br>
    <br>

    <?php
      print("Package: $packageName sells for $$price and has been sold sold to $numberOfTravelers people. <br>");
      printf("Package: %s sells for $%0.2f and has been sold sold to %d people. <br>", $packageName, $price, $numberOfTravelers);
      $subTotal = $price * $numberOfTravelers;
      $gstAmount = $subTotal * GST;
      print("GST = $gstAmount<br>");
      printf("Total= " .($subTotal + $gstAmount). "<br>");
      printTicket($numberOfTravelers);
      ?>

      <?php
        $y = "3.14";
        $a = 5;
        $b = 5.0;
        print("condition checking: x == y ");
        if($x == $y){
          print("equal<br>");
        }
        else {
          print("not Equal <br>");
        }
        print("condition checking: x === y ");
        if($x === $y){
          print("equal<br>");
        }
        else {
          print("not Equal <br>");
        }
        print("condition checking: a === b ");
        if($a === $b){
          print("equal<br>");
        }
        else {
          print("not Equal <br>");
        }
      ?>
      <ol>
        <?php
          for($i=0; $i<10; $i++){
            print("<li> item $i </li>");
          }
       ?>
      </ol>
      <?php
        //key, value array
        $soups = array("Mon" => "Mushroom", "Tue" => "Chicken", "Wed" => "Beef", "Thu" => "Cream of Brocolli", "Fri" => "Wonton");
        print_r($soups);
        print("<br>".$soups['Wed']."<br>");
        foreach ($soups as $day => $soup) {
          print("Day: $day Serving: $soup <br>");
        }
        $province = "AB"

      ?>


  </body>
</html>

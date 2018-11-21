<?php
  include_once("variables.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
      print("<table>");
        $i = 1;
        foreach ($urls as $key=>$value) {
          print("<tr><td>$i</td>");
          print("<td><a href='$value'>Link: $key</a></td></tr>");
          $i++;
        }
      print("</table><br>");
      $array = localTime(time(), true);
      print_r($array);
      print("<br>".time()."<br>");
      print(mktime(2,30,0,11,14,2019)."<br>");
      print(date("l, Y/F/d/ h:i:s A, e")."<br>");
      date_default_timezone_set("MST");
      print(date("l, Y/F/d/ h:i:s A, e")."<br>");

      $globalVar = 1;
      function incrementer($localVar){
        print("incrementer localVar = $localVar <br>");
        return ++$localVar;
      }

     ?>
  </head>
  <body>
    <?php
      print("globalVar = $globalVar<br>");
      print(incrementer($globalVar)."<br>");
      print("globalVar = $globalVar<br>");
    ?>
  </body>
</html>

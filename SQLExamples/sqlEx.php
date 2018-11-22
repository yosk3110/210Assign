<?php
  $dbh = mysqli_connect("localhost", "yosk", "password", "travelexperts");
  if(!$dbh){
    print("Connection Failed: ".mysqli_connect_errno()."--".mysqli_connect_error().PHP_EOL);
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>phpsqlpage</title>
  </head>
  <body>
    <?php
      $sql = "select * from Agents";
      $result = mysqli_query($dbh, $sql);
      $finfo = mysqli_fetch_fields($result);
      if(!$result){
        print("Query failed: ".mysqli_errorno()."--".mysqli_error().PHP_EOL);
        exit();
      }
      print("<table>");
      $firstrow = true;
      while ($row = mysqli_fetch_assoc($result)) {

        if($firstrow){
          print("<tr>");
          $keys = array_keys($row);
          foreach ($keys as $key) {
            print("<th>$key</th>");
          }
          $firstrow = false;
          print("</tr>");
        }
        print("<tr>");
        $values = array_values($row);
        foreach ($values as $value) {
          print("<td>$value</td>");
        }
        print("</tr>");
      }
      print("</table> <br>");
      include ("functions-genericinsertexample.php");
      print(buildtypestring($dbh, $finfo[0]->table));
      insertRow();
    ?>
  </body>
</html>
<?php
  mysqli_close($dbh);
?>

<!--Example connects with the travelexperts database, gets info from products table then updates the name-->

<?php
  include_once("functions.php");
  $dbh = dbConnect();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="loadProduct.php" method="post">
      Product Id: <select name="ProductId" onchange="this.form.submit();">
      <option value="">Select a product code</option>
      <?php
        $sql = "select ProductId from Products";
        $result = mysqli_query($dbh, $sql);
        if (!$result) {
          print("Request failed");
          exit();
        }
        while ($row = mysqli_fetch_array($result)) {
          print("<option value='$row[0]'>$row[0]</option>");
        }
      ?>
    </select><br>
      <!--Product Name: <input type="text" name="ProdName" value=""><br>-->
    </form>

  </body>
</html>

<?php
//if the user arrived here without going through updateform, there is not productID so they will be redirected to the page.
  if(!isset($_REQUEST["ProductId"])){
    header("Location: updateProductTable.php");
  }
  include_once("functions.php");
  $dbh = dbConnect();
  $sql = "select ProdName from Products where ProductId=?";
  $stmt = mysqli_prepare($dbh, $sql);
  mysqli_stmt_bind_param($stmt, "i", $_REQUEST["ProductId"]);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $prodName = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="finalizeUpdate.php" method="post">
      Product Id: <input type="text" name="ProductId" value="<?php print($_REQUEST["ProductId"]); ?>" readonly="readonly"><br>
      Product Name: <input type="text" name="ProdName" value="<?php print($prodName[0]); ?>"><br>
      <input type="submit" name="" value="Send">
    </form>

  </body>
</html>

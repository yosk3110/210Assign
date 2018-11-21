<?php
//if the user arrived here without going through updateform, there is not productID so they will be redirected to the page.
  if(!isset($_REQUEST["ProductId"])){
    header("Location: updateProductTable.php");
  }
  include_once("functions.php");
  $dbh = dbConnect();
  //validate the database
  //if data is okay
  if(updateProduct($_REQUEST)){
    header("Location: updateProductTable.php");
  }
  else{
    print("Product Update Failed");
  }
?>

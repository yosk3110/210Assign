<?php
session_start();
include("dbFunctions.php");
if(isset($_REQUEST)["user"]){
  /////////validate form
  $dbh = dbConnect();
  if(!$dbh){
    header("Location: register.php");
  }
  $sql = "INSERT INTO `customers`(`CustFirstName`, `CustLastName`, `CustAddress`, `CustCity`, `CustProv`,
    `CustPostal`, `CustCountry`, `CustHomePhone`, `CustBusPhone`, `CustEmail`, `AgentId`, `CustUserId`, `CustPassword`, `unHashedPass`)
     VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)"
  $stmt = mysqli_prepare($dbh, $sql);
  $typestring =
}

?>

<?php
  include("variables.php");
  function dbConnect(){
    global $host, $user, $pwd, $dbname;
    $dbh = mysqli_connect($host, $user, $pwd, $dbname);
    if(!$dbh){
      print("Connection Error: ".mysqli_connect_errno().":".mysqli_connect_error().PHP_EOL);
      exit();
    }
    return $dbh;
  }

  function insertAgent($agent){
    $sql = "INSERT INTO `agents`(`AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (?,?,?,?,?,?,?)";
    $dbh = mysqli_connect("localhost", "yosk", "password", "travelexperts");  //user and pass is assumed
    if(!$dbh){
      print("Connection Error: ".mysqli_connect_errno().":".mysqli_connect_error().PHP_EOL);
      exit();
    }
    $stmt = mysqli_prepare($dbh, $sql); //creates a statement, a container we can pass back and forth from database
    mysqli_stmt_bind_param($stmt, "ssssssi", $agent["AgtFirstName"], $agent["AgtMiddleInitial"],
      $agent["AgtLastName"], $agent["AgtBusPhone"], $agent["AgtEmail"], $agent["AgtPosition"], $agent["AgencyId"]);  //second param is the datatype of what we are inserting
      $result = mysqli_stmt_execute($stmt);
      if(!$result){
        print( mysqli_stmt_error($stmt));
        $fh = fopen("../errorlog.txt", "a");
        fwrite($fh, mysqli_errorno($stmt)." ");
        fwrite($fh, mysqli_stmt_error($stmt)."\n");
        fclose($fh);
        mysqli_close($dbh);
        return false;
      }
      mysqli_close($dbh);
      return true;
  }

  function updateProduct($product){
    $dbh = dbConnect();
    $sql = "UPDATE `products` SET `ProdName`= ? WHERE `ProductId` = ?";
    $stmt = mysqli_prepare($dbh, $sql);
    mysqli_stmt_bind_param($stmt, "si", $product["ProdName"], $product["ProductId"]);
    if(!mysqli_stmt_execute($stmt)){
      print(mysqli_stmt_error($stmt));
      $fh = fopen("errorlog.txt", "a");
      fwrite($fh, mysqli_stmt_error($stmt));
      fclose($fh);
      mysqli_close($dbh);
      return false;
    }
    mysqli_close($dbh);
    return true;
  }

?>

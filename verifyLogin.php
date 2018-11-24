<?php
    session_start();
    //check if REQUEST has values
  if(!isset($_REQUEST["AgentId"])){
    $_SESSION["message"] = "User ID and Password are Required";
    header("Location: login.php");
  }
  include("functions.php");
  if(!($dbh = dbConnect())){
      $_SESSION["message"] = "Failed to connect to server";
    header("Location: login.php");
  }
  $sql = "select AgtPassword from agents where AgentId=?";
  $stmt = mysqli_prepare($dbh, $sql);
  if(!$stmt->bind_param("s", $_REQUEST["AgentId"])){
    logSQLError($stmt);
    mysqli_close($dbh);
    $_SESSION["message"] = "Failed to connect to database";
    header("Location: login.php");
  }
  if(!$stmt->execute()){
    logSQLError($stmt);
    mysqli_close($dbh);
    $_SESSION["message"] = "Failed to retrieve table from database ";
    header("Location: login.php");
  }
  $result = $stmt->get_result();

  if(($passArray = $result->fetch_array(MYSQLI_NUM)) && (password_verify($_REQUEST["AgtPassword"], $passArray[0]))){
    mysqli_close($dbh);
    $_SESSION["AgentLogged"] = true;
    header("Location: addAgent.php");
  }
  else{
    $_SESSION["message"] = "User ID or Password is incorrect";
    mysqli_close($dbh);
    header("Location: login.php");
  }
?>

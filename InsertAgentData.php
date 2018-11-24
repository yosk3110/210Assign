<?php
  session_start();
  include "Agent.php";
  include("functions.php");
  //checking if a form was sent, if not redirect to add agent
  if (isset($_REQUEST["AgtFirstName"])){

    //if okay pass to insertAgent() function
    $newAgent = new Agent($_REQUEST);
    if(insertRow($newAgent)){
      print("Data insert success");
      $_SESSION["message"] = "Data insert success";
      header("Location: addAgent.php");
    }
    else{
      print("Data insert Failed");
      $_SESSION["message"] = "Data Insert Failed";
      header("Location: addAgent.php");
    }
  }
  else{
    $_SESSION["message"] = "A Form was not properly submitted";
    header("Location: addAgent.php");
  }
?>

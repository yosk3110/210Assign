<?php
  include("functions.php");
  if (isset($_REQUEST["AgtFirstName"])){
    //validate form data
    //if okay pass to insertAgent() function
    if(insertAgent($_REQUEST)){
      print("Data insert success");
    }
    else{
      print("Data insert Failed");
    }
  }
  else{
    header("Location: AddAgent.php");
    //usually you would write an error using session variables along with the redirect
  }
?>

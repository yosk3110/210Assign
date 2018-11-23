<?php
   function agentAdd($agent)
   {
     $mysqli = new mysqli("localhost", "root", "", "travelexperts");
     if ($mysqli->connect_errno)
     {
       return $mysqli->connect_error;
     }
     $keys = array_keys($agent);
     $colNames = implode(", ", $keys);
     $values = array_values($agent);
     $colValues = implode("','", $values);

     $sql = "INSERT INTO `agents` ($colNames) VALUES ('$colValues')";
     print($sql);
     $result = $mysqli->query($sql);
     $mysqli->close();
     return $result;
   }

   if (isset($_REQUEST["AgtFirstName"]))
   {
     //call a function to validate data
     //if the data is okay, add the agent to the database

     $message = agentAdd($_REQUEST);
     if ($message)
     {
       print($message);
     }
     else {
       print("Operation was sucessful");
     }
   }
?>

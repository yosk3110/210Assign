<?php
   include("functions.php");

   function updateAgentLogins($agent, $u, $p)
   {
     $mysqli = connectDatabase();
     $sql = "UPDATE agents SET AgtUserId='$u', AgtPassword='$p' ";
     $sql .= " WHERE AgentId= " . $agent;
     print($sql);

     $success = $mysqli->query($sql);

     $mysqli->close();
     return $success;
   }

   for ($i=1; $i<=9; $i++)
   {
     $u = "user$i";
     $p = md5("pass$i");
     if (updateAgentLogins($i, $u, $p))
     {
       print("agent $i updated");
     }

   }
?>

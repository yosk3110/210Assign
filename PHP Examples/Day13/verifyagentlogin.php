<?php
   session_start();
   include("functions.php");

   if (isset($_REQUEST['AgtUserId']))
   {
     $user = trim($_REQUEST["AgtUserId"]);
     $pwd = md5(trim($_REQUEST["AgtPassword"]));
     print("user:$user<br />");
     print("pwd:$pwd<br />");


     //check login
     $conn = connectDatabase();
     $sql = "SELECT AgtPassword from agents WHERE AgtUserId=?";
     $stmt = $conn->prepare($sql);
     $stmt->bind_param("s", $user);
     $stmt->execute();
     $stmt->bind_result($dbpwd);
     $stmt->fetch();
     if ($dbpwd == $pwd)
     {
       //login is okay, set session var
       $_SESSION["loggedin"] = "yes";
       header("Location: index.php");
     }
     else {
       $_SESSION["message"] = "UserId or Password is incorrect";
       header("Location: agentlogin.php");
     }
   }
   else {
     header("Location: agentlogin.php");
   }
?>

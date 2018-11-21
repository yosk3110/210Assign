<?php
  $userId = "user1";
  $pass = "pass1";
  $users = file("userlist.txt");  //generated using genuserfile.php
  foreach ($users as $user) {
    $user = rtrim($user);
    list($u,$p) = explode(",", $user);
    if($u == $userId && password_verify($pass, $p)){
      print("Match <br>");
    }
    else{
      print("no match <br>");
    }
  }
?>

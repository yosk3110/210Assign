<?php
session_start();

$title = "Agent Login Page";
include("header.php");

if (isset($_SESSION["message"]))
{
  print("<h2 style='color:red'>" . $_SESSION["message"] . "</h2>");
  unset($_SESSION["message"]);
}
?>

<form class="" action="verifyagentlogin.php" method="post">
  UserID:<input type="text" name="AgtUserId" value=""><br />
  Password:<input type="password" name="AgtPassword" value=""><br />
  <input type="submit" value="Send">
</form>

<?php
include("footer.php");
?>

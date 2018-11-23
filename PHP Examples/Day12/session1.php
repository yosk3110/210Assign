<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Set a Session</title>
</head>

<body>
<?php

session_start();

$_SESSION["username"] = "aaron";
$_SESSION['email'] = "amw124@gmail.com";

print("Session variables have been set -- go to session2.php to view them");

?>
</body>
</html>

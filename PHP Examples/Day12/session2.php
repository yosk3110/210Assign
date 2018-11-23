<?php
	session_start();	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Secure Page 1</title>
</head>

<body>
<?php
	echo session_id();
	echo "<br>";
	echo $_SESSION['username'];
	echo "<br>";
	echo $_SESSION['email'];
?>
</body>
</html>

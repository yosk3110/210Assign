<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>
<body>
<p>Please enter your phone number in format (XXX) XXX-XXXX</p>
<form method="post" action="phonenumber.php">
<input type="text" name="phone"><br>
<input type="submit" name="submit" value="submit">
</form>
<?php

if(isset($_POST['submit'])) {
	
	$reg = "/^\([0-9]{3}\)\s*[0-9]{3}-[0-9]{4}$/";
	
	if(!preg_match($reg,trim($_POST['phone']))) {
		echo "Please check your phone number format";
		die;
	}
	echo "Thanks for entering your phone number!";
}

?>
</body>
</html>

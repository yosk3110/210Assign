<?php
	setcookie("accessedbefore","no",time()+3600);
	setcookie("accessedafter","no",time()+3600);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Read a cookie</title>
</head>

<body>
<?php
echo $_COOKIE['accessedbefore'];


if($_COOKIE['accessedbefore'] == "yes") {
	echo "<h2>You have been here before and we left a cookie on your computer!</h2>";
} else {
	echo "<h2>This is your first visit to my site</h2>";
}

?>
</body>
</html>

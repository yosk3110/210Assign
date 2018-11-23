<?php
	setcookie("access_time", time(), time()+60 * 60 * 24 *  365);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Time</title>
</head>

<body>
<?php
$last_access =  $_COOKIE['access_time'];
$current_time = time();

//print $current_time

if($_COOKIE['access_time']) {
	print "<h2>You were last here " . ($current_time - $last_access) . " seconds ago.</h2>";
} else {
	echo "<h2>This is your first visit to my site</h2>";
}
?>
</body>
</html>

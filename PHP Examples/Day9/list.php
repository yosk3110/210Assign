<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>
<body>
<p>Enter the words or names you want sorted with each word separated by an empty space</p>
<form method="post" action="">
<input type="text" name="list"><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php

if(isset($_POST['submit'])) {
	$array = explode(" ",$_POST['list']);
	sort($array); //sort the array
	
	$newlist = implode("<br>",$array);
	echo "List:<br>".$newlist;
}

?>
</body>
</html>

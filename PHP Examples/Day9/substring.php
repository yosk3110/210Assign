<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php

$var = "ABCDEF";
// get length of string
//echo strlen($var);

// get substring of string starting at character 3
echo substr($var,3,2);


$str = "   abc      ";
print "---$str---";
print "..." . trim($str) . "...";
?>
</body>
</html>

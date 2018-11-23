<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php

$var1 = 4;
$var2 = "5";

$var2--;
$var2++;

$var2 /= 4;
$var2 = $var2 + 4;

echo $var1 . " " . $var2;

echo "<br><br>";

// checks the value only of the two variables
echo $var1 == $var2;

//checks the value AND the datatype of the two variables
echo $var1 === $var2;


if($var1==5 && $var2==5) {
	echo "yes, they equal 5";
	echo "<br>";
} else if($var1 == 4 && $var2 == 5) {
	echo "var 1 is 4 and var 2 is 5";
} else {
	echo "no, at least one of them is not 5 and var 1 is not 4";
	echo "<br>";
}


if(!$var1) {
	echo "var 1 is false";
} else {
	echo "var 1 is true";
}


// shorthand conditional
echo ($var1)?"var 1 is true":"var 1 is false";

$var1 = 3;

switch($var1) {
	case(2):
		echo "var 1 is 2";
		break;
	case(3);
	case(4):
		echo "var 1 is 3 or 4";
		break;
	default:
		echo "var 1 is some other number";
		break;
}

?>
</body>
</html>

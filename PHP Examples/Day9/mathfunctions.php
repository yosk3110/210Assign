<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php

$var = -5.67474;
// round the number to 2 decimal places
echo round($var,2);

// rounds the number to the next integer which is greater or equal
echo ceil($var);

// rounds the number to the next integer which is less than or equal
echo floor($var);

// makes the number positive, regardless of sign
echo abs($var);

// random number
echo rand();

// random number between (and including) 0 and 10
echo rand(0,10);

// seed the random number with a pseudo random number
srand(microtime() * 1000000);
echo rand();

?>
</body>
</html>

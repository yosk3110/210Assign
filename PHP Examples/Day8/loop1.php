<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<ul>
<?php
$i = 1;

// while loop
echo "while loop";
while($i <= 10) {
	print "<li>".$i*$i."</li>";
	$i++;
}

// do while loop
echo "do while loop";
do {
	print "<li>".$i*$i."</li>";
	$i++;
} while($i<=10);

// for loop
echo "for loop";
for($j=1;$j<=10;$j++) {
	print "<li>".$j*$j."</li>";
}

?>
</ul>
</body>
</html>

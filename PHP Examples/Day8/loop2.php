<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php

$counter=0;

// breaking out of loops
while($counter<8) {
	$counter++;
	if($counter==5) {
		echo "break<br>";
		break;
	}
	echo "End of loop: counter = $counter<br>";
}
echo "After the while loop is broken";

// continuing a loop
while($counter<8) {
	$counter++;
	if($counter==5) {
		echo "continue<br>";
		continue;
	}
	echo "End of loop: counter = $counter<br>";
}
echo "After the continue loop";

?>
</body>
</html>

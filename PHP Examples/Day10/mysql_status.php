<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Test MySQL</title>
</head>

<body>
<?php

$host = "localhost";
$user = "root";
$pass = "";

mysql_connect($host,$user,$pass);
$sql = "show status";
$result = mysql_query($sql);

if($result == 0 ) {
	echo "Error: ".mysql_errno()." : ".mysql_error();
} else if(mysql_num_rows($result) == 0) {
	echo "Query did not return anything";
} else {
	for($i = 0; $i < mysql_num_rows($result);$i++) {
		$rowarray = mysql_fetch_row($result);
		for($j=0;$j<mysql_num_fields($result);$j++) {
			echo $rowarray[$j] . " ";
		}
        print "<br>\n";
	}
}
mysql_close();
?>
</body>
</html>

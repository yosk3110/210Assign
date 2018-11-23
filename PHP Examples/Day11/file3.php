<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php

$dir = "c:\\windows\\";
$handle = opendir($dir);

while (($file = readdir($handle)) !== false) {
	// checks to see if the file extension is .html
	//if(substr($file,strlen($file)-5)==".html") {
		echo $file." - ".filesize($dir.$file)."<br>";
	//}
}

?>
</body>
</html>

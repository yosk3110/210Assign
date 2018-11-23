<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<h2>Simple Form</h2>
<form method="get" action="01formprocessor.php">
<input type="text" name="first_name">First Name:<br>
<input type="text" name="last_name">Last Name:<br>
<input type="text" name="email">Email:<br>
<textarea rows="4" cols="25" name="comments"></textarea>Comments:<br>
<p>Which job are you applying for?</p>
<input type="radio" name="job" value="Programmer" checked>Programmer<br>
<input type="radio" name="job" value="Designer">Designer<br>
<input type="radio" name="job" value="Manager">Manager<br>
<input type="radio" name="job" value="Marketing">Marketing<br><br>
<input type="hidden" name="hidden1" value="Job application form">

<?php
	$random = rand(0,10);
	
	

print "<input type=\"hidden\" name=\"id\" value=\"$random\">\n";

?>

<input type="submit" name="submit" value="submit">
</form>
</body>
</html>

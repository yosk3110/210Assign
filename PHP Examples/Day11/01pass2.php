<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<?php
	$name = $_POST['name'];
	$name = $_POST['email'];

?>
<form method="post" action="01pass3.php">
<input type="text" name="phone">Phone:<br>
<input type="text" name="address">Address:<br>
<input type="hidden" name="name" value="<?php echo $_POST['name']; ?>">
<input type="hidden" name="email" value="<?php echo $_POST['email']?>">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>

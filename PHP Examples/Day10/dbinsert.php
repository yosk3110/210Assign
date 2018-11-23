<?php
	$dbh = @mysqli_connect("localhost","root","") or die("can't connect<br />");

	if (mysqli_select_db($dbh, "travelexperts"))
	{
		print("Selected DB: travelexperts<br />");
	}
	else
	{
		print("can't select DB: travelexperts<br />");
		exit();
	}

	$ProdName = "widget";
	$sql = "INSERT INTO products (ProdName) values ('$ProdName')";
	print($sql);
	$result = mysqli_query($dbh, $sql);
	if ($result)
	{
	   print("Row was inserted");
	}
	else
	{
	   print("Error inserting row");
	} 
?>

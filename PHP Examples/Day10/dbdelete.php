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

	$ProdID = 95;
	$sql = "DELETE FROM products WHERE ProductID = $ProdID";
	print($sql);
	$result = mysqli_query($dbh, $sql);
	if ($result)
	{
	 print("Row was deleted");
	}
	else
	{
	 print("Error deleting row");
	} 
?>
<?php
	$dbh = mysqli_connect("localhost","root","") or die("cannot connect");

	mysqli_select_db($dbh, "travelexperts");

	$sql = "UPDATE customers SET CustCity = 'Edmonton' WHERE CustomerId=104";

	//submit the sql to the database
	$result = mysqli_query($dbh, $sql);

	if ($result)
	{
	 print("row was updated");
	}
	else
	{
	 print("error updating row");
	}

	mysqli_close($dbh);

?>
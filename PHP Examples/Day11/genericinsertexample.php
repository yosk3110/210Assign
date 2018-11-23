<?php
	include("functions-genericinsertexample.php");
	$data["AgtFirstName"] = "Fred";
	$data["AgtMiddleInitial"] = "J";
	$data["AgtLastName"] = "Jones";
	$data["AgtBusPhone"] = "403-555-5556";
	$data["AgtEmail"] = "sam@travelexperts.com";
	$data["AgtPosition"] = "Agent";
	$data["AgencyId"] = 1;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$message = insertRow("agents", $data);
		print("Result: $message");
	?>
</body>
</html>




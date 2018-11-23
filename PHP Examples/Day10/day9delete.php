<?php
   $agtid = 5;
   $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());   
   
   $sql = "delete from agents where agentid=$agtid";
   $result = mysqli_query($link, $sql) or die("SQL Error");
   if ($result)
   {
      print("Agent deleted");
   }
   else
   {
      print("Agent not found");
   }
   mysqli_close($link);
?>
<!DOCTYPE html>

<html>
<head>
   <title>Day9 Example1</title>
</head>
<body>
<?php
   //print($datatable);
?>
</body>
</html>
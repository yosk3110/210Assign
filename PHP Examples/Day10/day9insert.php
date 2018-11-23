<?php
   $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());   
   
   $sql = "insert into agents (AgtFirstName, AgtLastName, AgencyId) values ('fred', 'smith', 2)";
   $result = mysqli_query($link, $sql) or die("SQL Error");
   print("result=$result<br />");
   if ($result)
   {
      print("Agent inserted");
   }
   else
   {
      print("Agent not inserted");
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
?>
</body>
</html>
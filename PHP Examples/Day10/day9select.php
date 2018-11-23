<?php
   $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());   
   
   $sql = "select * from agents";
   $result = mysqli_query($link, $sql) or die("SQL Error");
   $datatable = "<table border='1'>";
   while($row = mysqli_fetch_row($result))
   {
      $datatable .= "<tr>";
	  foreach ($row as $col)
	  {
	     $datatable .= "<td>$col</td>";
	  }
	  $datatable .= "</tr>";
   }
   $datatable .= "</table>";
   mysqli_close($link);
?>
<!DOCTYPE html>

<html>
<head>
   <title>Day9 Example1</title>
</head>
<body>
<?php
   print($datatable);
?>
</body>
</html>
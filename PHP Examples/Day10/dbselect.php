<html>
<head><title>Database Select Example</title></head>
<body>
<?php
   //the "@" suppresses error messages
   $dbh = @mysqli_connect("localhost","root","") or die("can't connect");
   if (!$dbh)
   {
      print("can't connect");
	  exit();
   }
   
   if (mysqli_select_db($dbh, "travelexperts"))
   {
      print("Selected DB: travelexperts");
   }
   else
   {
      print("can't select DB: travelexperts");
	  exit();
   }
   $result = mysqli_query($dbh, "SELECT * FROM products");
    //print $result;
   ?>
   <table border="2">
   <?php
   while ($row = mysqli_fetch_row($result))
   {
      print("<tr>");
	  foreach ($row as $col)
	  {
	     print("<td>$col</td>");
	  }
	  print("</tr>");
   }
   print("</table>");
   
   
   
?>
</body>
</html>

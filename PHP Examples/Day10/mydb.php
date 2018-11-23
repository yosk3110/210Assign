<html>
<head>
   <title>db example</title>
</head>
<body>
<?php

   $dbh = mysqli_connect("localhost","root","") or die("cannot connect");
   mysqli_select_db($dbh, "travelexperts");
   print("connected successfully");
   
   $result = mysqli_query($dbh, "SELECT * FROM agents");
   print("<table border=1>");
   
   //$row = mysql_fetch_row($result);
   //var_dump($row);
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
   
   print("<br>");
   print("<br>");
   print("<br>");
   
   $result = mysqli_query($dbh, "SELECT * FROM agents");
   print("<table border=1>");
   $firstrow = true;
   while ($row = mysqli_fetch_assoc($result))
   {
      if ($firstrow)
	  {
	     //print column headings
	     print("<tr>");
		 $keys = array_keys($row);
	     foreach ($keys as $key)
	     {
	        print("<th>$key</th>");
	     }
	     print("</tr>");
		 $firstrow = false;
	  }
	  
	  print("<tr>");
	  foreach ($row as $col)
	  {
	     print("<td>$col</td>");
	  }
	  print("</tr>");
   }
   print("</table>");
  
   mysqli_close($dbh);
?>
</body>
</html>

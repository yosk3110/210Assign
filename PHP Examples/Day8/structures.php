<html>
<head><title>structures</title></head>
<body>

<?php 
      $items = 5;
	  
      if (!($items > 10) || ($items < 3))
	  {
	     print("<h1>in range</h1>\n");
	  }
	  else
	  {
	     print("<h1>out of range</h1>\n");
	  }
	  
	  $i = 1;
	  do
	  {
	     print("<h$i>Do While Loop</h$i>\n");
		 $i++;
	  } while($i <= 6);
	  
	  for ($i=1; $i<=6; $i++)
	  {
	     print("<h$i>For Loop</h$i>\n");
	  }
	  
	  $myLinks = array("rainworks.ca", "php.net", "apache.org");
	  
	  foreach ($myLinks as $linkName)
	  {
	     print("<a href=\"http://$linkName\">$linkName</a><br />\n");
	  }
	  
   ?>
</body>
</html>

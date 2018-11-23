<?php
   $filename = "03myfile.txt";
?>
<html>
<head>
   <title>example1</title>
</head>
<body>

   <?php
	  //read from filehandle
	  $filehandle = fopen($filename, "r");

	  $input = fread($filehandle, 20);
	  print("We read: \"$input\" from file: $filename<br />");
	  fclose($filehandle);
	  
	  //read directly from file
	  $lines = file($filename);
	  foreach ($lines as $line)
	  {
	     print("Line of text: $line<br />");
	  }

     ?>

</body>
</html>

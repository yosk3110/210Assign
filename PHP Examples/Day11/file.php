<?php
   $filename = "myfile.txt";
?>
<html>
<head>
   <title>example1</title>
</head>
<body>

   <?php
      if (touch($filename))
	  {
	     print("file created<br />");
	  }
	  else
	  {
	     print("file not created<br />");
	  }
	  $filehandle = fopen($filename, "a");
	  print("number of bytes written:" . fwrite($filehandle, "This is some more text") . "<br />");
	  fclose($filehandle);
     ?>

</body>
</html>

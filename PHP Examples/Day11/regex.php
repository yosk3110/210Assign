<?php
   $string = "abc my postal code is Q1Q 1Q1 today,T2J 2R5 W2W 2W2 is not";
   //$string = "abc abc";
?>
<html>
<head>
   <title>example1</title>
</head>
<body>

   <?php
      if (preg_match("/abc/", $string))
	  {
	     print("matched" . "<br />");
	  }
	  else
	  {
	     print("not matched" . "<br />");
	  }
	  
	  
      print("preg return value=" . preg_match("/[A-Za-z][0-9][A-Za-z] [0-9][A-Za-z][0-9]/", $string, $match) . "<br />");

	  print("preg results:" . "<br />");
	  foreach ($match as $item)
	  {
	     print($item . "<br />");
	  }
      print("preg return value=" . preg_match_all("/[A-Za-z]\d[A-Za-z]\s?\d[A-Za-z]\d/", $string, $match) . "<br />");
	  print("preg results:" . "<br />");
	  foreach ($match as $item)
	  {
	     foreach ($item as $subItem)
		 {
		    print($subItem . "<br />");
		 }
	  }
     ?>

</body>
</html>

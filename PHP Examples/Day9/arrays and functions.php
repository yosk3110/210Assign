<?php
   $printCounter = 0;
   //functions
   function printArray(&$a, $pc)
   //function printArray($a, $pc)
   {
	  //GLOBAL $array1;
	  $a[1] = 33;
	  foreach ($a as $item)
	  {
	     print($item . "<br />");
	  }
	  return ++$pc;
   }
?>
<html>
<head>
   <title>example1</title>
</head>
<body>

   <?php
	  print("------------------Function Example-------------" . "<br />");
      $array1 = array(1, "one", 55, "two");
	  
	  print($array1 . "<br />");
      $printCounter = printArray($array1,$printCounter);
	  print("Number of print operations=$printCounter<br />");
	  print("The second element of the array=$array1[1]<br />");
	  print("count=" . count($array1) . "<br />");
      print "-----------------------------------------<br>";

	  print("sorted Array<br />");
	  sort($array1);
      $printCounter = printArray($array1,$printCounter);
	  print("Number of print operations=$printCounter<br />");
      print "-----------------------------------------<br>";	 
 
	  print("shuffled Array<br />");
	  shuffle($array1);
      $printCounter = printArray($array1,$printCounter);
	  print("Number of print operations=$printCounter<br />");
      print "-----------------------------------------<br>";	  

	  print("push/pop Array<br />");
	  array_push($array1, "new value");
      $printCounter = printArray($array1,$printCounter);
	  print("Number of print operations=$printCounter<br />");
	  $poppedItem = array_pop($array1);
	  print("Popped:" . $poppedItem . "<br />");
      print "-----------------------------------------<br>";
	  
      $printCounter = printArray($array1,$printCounter);
	  print("Number of print operations=$printCounter<br />");
	  
     ?>

</body>
</html>

<html>
<head>
   <title>example1</title>
</head>
<body>

   <?php
	  print("------------------Associative Arrays-------------" . "<br />");
      $arrayA = array("one" => 55, "two" => "Perl Rules!");
	  $arrayA["three"] = 99999;
	  print($arrayA . "<br />");
	  foreach ($arrayA as $item)
	  {
	     print($item . "<br />");
	  }
	  print("count=" . count($arrayA) . "<br />");
	  
      print " -- " . $arrayA["one"] . "<br>\n";
	  reset($arrayA);
	  while(list($key, $value) = each($arrayA))
	  {
	     print("key=$key, value=$value<br />");
	  }
	  
	  $keys = array_keys($arrayA);
	  foreach ($keys as $item)
	  {
	     print("The key is $item and the value is $arrayA[$item]<br />");
	  }
	  

	  print("------------------Regular Arrays-------------" . "<br />");

      $array1 = array(1, "one", 55, "two");
	  
	  print($array1 . "<br />");
	  for ($i=0; $i < count($array1); $i++)
	  {
	     print($array1[$i] . "<br />");
	  }
	  foreach ($array1 as $item)
	  {
	     print($item . "<br />");
	  }
	  print("count=" . count($array1) . "<br />");

	  print("sorted Array<br />");
	  sort($array1);
	  foreach ($array1 as $item)
	  {
	     print($item . "<br />");
	  }
	  
	  print("shuffled Array<br />");
	  shuffle($arrayA);
	  foreach ($arrayA as $item)
	  {
	     print($item . "<br />");
	  }
      print " -- " . $arrayA["one"] . "<br>\n";
	  foreach ($keys as $item)
	  {
	     print("The key is $item and the value is $arrayA[$item]<br />");
	  } 
	  print("push/pop Array<br />");
	  array_push($array1, "new value");
	  foreach ($array1 as $item)
	  {
	     print($item . "<br />");
	  }
	  $poppedItem = array_pop($array1);
	  print("Popped:" . $poppedItem . "<br />");
	  
	  foreach ($array1 as $item)
	  {
	     print($item . "<br />");
	  }
	  
     ?>

</body>
</html>

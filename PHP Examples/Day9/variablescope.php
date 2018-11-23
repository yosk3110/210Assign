<HTML> 
<HEAD>
<TITLE>First PHP Script</TITLE>
</HEAD>
<BODY>
<?PHP
   $myvar = 5;
   function incrementer($localvar)
   {
      $localvar++;
      print "Myvar is $localvar<br>";
	  $localvar++;
	  return 12;
   }
   $myvar = incrementer($myvar); 
   print("myvar=$myvar<br>");
?>
</BODY>
</HTML>

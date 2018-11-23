<HTML> 
<HEAD>
<TITLE>First PHP Script</TITLE>
</HEAD>
<BODY>
<?php
   $string = 'http://hpeters.org?username=a#$% &passwd=\"!@+';
   print("$string<br>");
   $string = urlencode($string);
   print("$string<br>");
   $string = urldecode($string);
   print("$string<br>");
   

?>
</BODY>
</HTML>

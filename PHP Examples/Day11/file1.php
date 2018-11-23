<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="file1.php">
<input type="text" name="name">Name:<br>
<input type="text" name="email">Email:<br>
<textarea name="comments" rows="4" cols="25"></textarea>Comments:<br>
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit'])) 
{

   foreach($_POST as $key=>$val) 
   {
	  $$key = $val;
   }

   $filename = "data.txt";
   $filepointer = fopen($filename,"a+");
   if(fwrite($filepointer,"Name: $name\nEmail: $email\nComments: $comments\n\n")) 
   {
	   echo "File written successfully";
   } 
   else 
   {
	  echo "File not written";
   }
   fclose($filepointer);
}
?>
</body>
</html>

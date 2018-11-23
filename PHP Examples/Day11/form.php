<?php
   $validUser = "aaron";
   $password = "password";
?>
<html>
<head>
   <title>example1</title>
</head>
<body>

   <?php
	   //dump the server array
	   print("Contents of the \$_SERVER array<br />");
	   while(list($key,$value) = each($_SERVER))
	   {
	      print("key=$key value=$value<br />");
	   }

      if (isset($_GET["submit"]))
      {
         $tries = ++$_GET["tries"];
		 if ($tries > 3)
		 {
			 print("Too many tries -- you are locked out");
		 
		 }
		 else
		 {
			 print("Thanks for submitting your data");
			 if ($_GET["userid"] == $validUser && $_GET["passwd"] == $password)
			 {
				print("Welcome to my website<br />");
				print("<a href=\"http://sait.ca\">continue</a>");
			 }
			 else
			 {
				print('<h2 style="color:red">Incorrect UserID or Password -- Try Again</h2>');
                // heredoc: http://www.tizag.com/phpT/strings.php
				print <<<EOF
				<form method="get" action="">
				   UserID:<input type="text" name="userid"><input type="hidden" name="tries" value="$tries"><br />
				   Password:<input type="password" name="passwd"><br />
				   <input type="submit" name="submit" value="Log In">
				</form>
EOF;
			 }
		 }
      }
	  else
	  {
         print("Enter your login information and submit");
            ?>
			<form method="get" action="">
               UserID:<input type="text" name="userid"><input type="hidden" name="tries" value="0"><br />
               Password:<input type="password" name="passwd"><br />
               <input type="submit" name="submit" value="Log In">
            </form>
			<?php
	  }
   ?>


</body>
</html>

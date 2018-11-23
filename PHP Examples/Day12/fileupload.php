<?php
   if (isset($_POST["submit"]))
   {
      print("File name: " . $_FILES["upload"]["name"] . "<br />");
      print("File tmp_name: " . $_FILES["upload"]["tmp_name"] . "<br />");
      print("File size: " . $_FILES["upload"]["size"] . "<br />");
      print("File type: " . $_FILES["upload"]["type"] . "<br />");
      print("File error: " . $_FILES["upload"]["error"] . "<br />");
	  
	  if (move_uploaded_file($_FILES["upload"]["tmp_name"], "c:\\wamp\\www\\todo.txt"))
	  {
	     print("File was uploaded");
	  }
	  else
	  {
	     print("File upload had a problem<br>");
		 die("can't move file");
	  }
   }
?>

<html>
<head>
<title>FileUploadExample</title>
</head>
<body>

   <form method="post" action="" enctype="multipart/form-data">
      <input type="file" name="upload">
	  <input type="submit" name="submit" value="Upload">
   </form>

</body>
</html>

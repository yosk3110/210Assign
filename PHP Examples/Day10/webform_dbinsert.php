<?php
   if (isset($_GET["mode"]))
   {
      $mode = $_GET["mode"];
   }
   else
   {
      $mode = "display";
   }
   
   if ($mode == "delete")
   {
      $myDbh = getConnection();
	  if ($myDbh)
	  {
	     deleteProduct($myDbh);
	     displayProducts($myDbh);
	  }
   }
   elseif ($mode == "insert")
   {
        $myDbh = getConnection();
		if ($myDbh)
		{
		   insertProduct($myDbh);
		   displayProducts($myDbh);
		}
   }
   else
   {
        $myDbh = getConnection();
		if ($myDbh)
		{
	       displayProducts($myDbh);
		}
   }

   function deleteProduct($dbh)
   {
      $ProdID = $_GET["prodid"];
	  $sql = "DELETE FROM products WHERE ProductID = $ProdID";
	  print($sql . "<br />");
	  $result = mysqli_query($dbh, $sql);
	  if ($result)
	  {
	     print("Row was deleted<br />");
	  }
	  else
	  {
	     print("Error deleting row<br />");
	  } 
   }
   
   function getConnection()
   {
		$conn = mysqli_connect("localhost", "root", "", "travelexperts") or die("can't connect<br />");
		return $conn;
   }

   function displayProducts($dbh)
   {
		$result = mysqli_query($dbh, "SELECT * FROM products");
		print("<table border='2'>");
		while ($row = mysqli_fetch_row($result))
		{
			print("<tr>");
			foreach ($row as $col)
			{
				print("<td>$col</td>");
			}
			//print("<td><form method='get' action=''><input type='hidden' value='$row[0]' name='prodid'><input type='submit' value='delete'></form></td></tr>");
			print("<td><a href='$_SERVER[PHP_SELF]?prodid=$row[0]&mode=delete'>delete</a></td></tr>");
		}
		print("</table>");
   }
   
   function insertProduct($dbh)
   {
      $ProdName = $_POST["ProdName"];
	  $sql = "INSERT INTO products (ProdName) values ('$ProdName')";
	  print($sql . "<br />");
	  $result = mysqli_query($dbh, $sql);
	  if ($result)
	  {
	     print("Row was inserted<br />");
	  }
	  else
	  {
	     print("Error inserting row<br />");
	  } 
   }
?>
<html>
<head><title>Database Insert Example</title></head>
<body>
<?php
   
   //mysql_close($dbh);
   print "<form method=\"post\" action=\"$_SERVER[PHP_SELF]?mode=insert\">\n";
?>
      Product Name: <input type="text" name="ProdName"><br />
	  <input type="submit" name="submit" value="Save">
   </form>
</body>
</html>

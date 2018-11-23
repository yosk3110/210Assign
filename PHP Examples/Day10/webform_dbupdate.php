<!--
Written by Harv Peters, Oct. 10, 2005

This example reads the "customers" table and generates a row in an html table for each row found.
The customer ID is not modifiable, but the other columns can be changed and submitted.
The form reloads the current page and receives the form fields.  The fields are used to create
SQL statements to update the table.

This example uses arrays to enable the creation of repeating form field names that can be 
processed by a for loop. 

-->
<html>
<head>
   <title>db example</title>
</head>
<body>
<?php
   //Check if the form has been submitted previously.  If so, then get and process the data, else do nothing
   if (isset($_REQUEST["submit"]))
   {
      $dbh = mysqli_connect("localhost", "root", "", "information_schema") or die("cannot connect");
      
	  //retrieve the column names from the data-dictionary and store in an array
	  //to be used in generating the SQL
	  	  $colResult = mysqli_query($dbh, "SELECT COLUMN_NAME FROM COLUMNS where TABLE_NAME = 'customers'");
      while ($row = mysqli_fetch_row($colResult))
      {
	     $colNames[] = $row[0];
	  }
	  
	  $sql = "";
	  
      mysqli_select_db($dbh, "travelexperts");
	  //Check how many rows were in the form and use that to control the retrieval of the request data.
	  //This field was passed as a hidden field which was set by counting the number of rows of data
	  //read from the database.
	  //Since we generated the form with field names like "row0", "row1", and "row2", we have to use a
	  //"for" loop to read all the elements for each row and build the sql string.
	  for ($i=0; $i< $_REQUEST["numRows"]; $i++)
	  {
	     //Note the use of the double [ ]'s.  The first set of [ ] refers to the field name of the form,
		 //and the second set of [ ] contains an index number, since that field is an array.
	     $sql = "UPDATE customers SET ";
		 for ($j=1; $j<count($colNames); $j++)
		 {
		    $sql .= "$colNames[$j]='" . $_REQUEST["row$i"][$j] . (($j+1==count($colNames)) ? "' " : "', ");
		 }
		 $sql .= "WHERE " . $colNames[0] . "=" . $_REQUEST["row$i"][0];
		 print($sql . "<br>"); //this statement is used for testing
		 //submit the sql to the database
	     $result = mysqli_query($dbh, $sql);
	  }
      mysqli_close($dbh);
  
   }

   $dbh = mysqli_connect("localhost","root","", "travelexperts") or die("cannot connect");

   //read the database for all rows in the customers table and generate an html table with each row of data
   //in a table row tag.
   $result = mysqli_query($dbh, "SELECT * FROM customers");
   
   //wrap the table in a form tag so we can submit changes
   
   print "<form method='post'><table>" ;
   //keep track of the row number so we can generate a unique form field name for each row
   $rowIndex = 0;
   
   //get each row from the result and format html around it
   while ($row = mysqli_fetch_row($result))
   {
	  print("<tr>\n");
	  
	  //process the columns of the row
	  for ($i = 0; $i<count($row); $i++)
	  {
	     //if this is the first column, then display its value but don't allow it to be modified.
		 //send the value along in a hidden field to be used in generating the sql.
		 //otherwise, display the value in a text field 
	     if ($i == 0)
		 {
		    //construct a unique name for each the fields of each row by concatenating a number to
			//the end of the field name.  Make the field into an array so we can handle many rows and each will have a unique
			//name with an index number representing the column position
			print("<td>$row[$i]<input type='hidden' name='row" . $rowIndex . "[" . $i . "]' value='$row[$i]'></td>\n");
		 }
		 else
		 {
		    print("<td><input type='text' name='row" . $rowIndex . "[" . $i . "]' value='$row[$i]' /></td>\n");
		 }
	  }
	  print("</tr>\n");
	  //increment the row number
	  $rowIndex++;
   }
   print("</table>\n");
   //store the number of rows in a hidden field to use when the form is submitted
   print("<input type='hidden' name='numRows' value='" . $rowIndex . "' />\n");
   print("<input type='submit' name='submit' value='submit changes'>\n");
   print("</form>\n");
   
   mysqli_close($dbh);
?>
</body>
</html>

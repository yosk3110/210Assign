<?php
  include("variables.php");
  //attempts to connect to the db
  //returns: dbh or false
  function dbConnect(){
    global $host, $user, $pwd, $dbname;
    $dbh = mysqli_connect($host, $user, $pwd, $dbname);
    if(!$dbh){
      print("Connection Error: ".mysqli_connect_errno().":".mysqli_connect_error().PHP_EOL);
      $fh = fopen("errorlog.txt", "a");
      fwrite($fh, mysqli_connect_errno()." : ");
      fwrite($fh, mysqli_connect_error()."\n");
      fclose($fh);
      return false;
    }
    return $dbh;
  }

  function logSQLError($stmt){
    $fh = fopen("errorlog.txt", "a");
    fwrite($fh, mysqli_stmt_errno($stmt)." : ");
    fwrite($fh, mysqli_stmt_error($stmt)."\n");
    fclose($fh);
  }

//inserts a row of data into a table
  function insertRow($tableName, $newRow){
    $dbh = dbConnect();
    //create stmt from given array
    $keys = array_keys($newRow);
    $keystring = implode(",", $keys);
    $valuesString = "";
    $arrayLength = count($keys);
    for ($i=0; $i < $arrayLength; $i++)
    {
      $valuesString .= "?";
      if($i < $arrayLength - 1){
        $valuesString .= ",";
      }
    }
    $sql = "INSERT INTO $tableName($keystring)"."VALUES ($valuesString)";
    $stmt = mysqli_prepare($dbh, $sql); //creates a statement, a container we can pass back and forth from database
    $args = array(buildtypestring($dbh, $tableName));
		foreach ($keys as $key)
		{
			$args[] = &$newRow[$key];  //array of references to the table content
		}
    print_r($args);

		call_user_func_array(array($stmt,"bind_param"), $args); //call bind param on stmt with args
    $result = $stmt->execute();
      if(!$result){
        logSQLError($stmt);
        mysqli_close($dbh);
        return false;
      }
      mysqli_close($dbh);
      return true;
  }

  //function taken from example
  function buildtypestring($dbh, $tableName)
  {
      //get table info to build type string for bind param function
    $typestring = "";
    $res = mysqli_query($dbh, "DESCRIBE $tableName");
    while($row = mysqli_fetch_assoc($res))
    {
      if ($row["Extra"] != "auto_increment")
      {
        $match = array();
        preg_match("/^[a-z]+/", $row['Type'], $match);
        switch ($match[0])
        {
          case "tinyint";
          case "smallint";
          case "mediumint";
          case "bigint";
          case "int":
            $typestring .= "i";
            break;
          case "decimal";
          case "double";
          case "real";
          case "float":
            $typestring .= "d";
            break;
          case "tinytext";
          case "mediumtext";
          case "longtext";
          case "date";
          case "time";
          case "timestamp";
          case "datetime";
          case "year";
          case "varchar":
            $typestring .= "s";
            break;
          default:
            $typestring .= "b";
        }
      }
    }
    return $typestring;
  }
  function updateProduct($product){
    $dbh = dbConnect();
    $sql = "UPDATE `products` SET `ProdName`= ? WHERE `ProductId` = ?";
    $stmt = mysqli_prepare($dbh, $sql);
    mysqli_stmt_bind_param($stmt, "si", $product["ProdName"], $product["ProductId"]);
    if(!mysqli_stmt_execute($stmt)){
      print(mysqli_stmt_error($stmt));
      $fh = fopen("errorlog.txt", "a");
      fwrite($fh, mysqli_stmt_error($stmt));
      fclose($fh);
      mysqli_close($dbh);
      return false;
    }
    mysqli_close($dbh);
    return true;
  }

?>

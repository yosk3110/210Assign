<?php
  include("variables.php");
  function dbConnect(){
    global $host, $user, $pwd, $dbname;
    $dbh = mysqli_connect($host, $user, $pwd, $dbname);
    if(!$dbh){
      print("Connection Error: ".mysqli_connect_errno().":".mysqli_connect_error().PHP_EOL);
      logError(mysqli_connect_errno(), mysqli_connect_errno());
      return false;
    }
    return $dbh;
  }

  function logError($errno, $error){
    $fh = fopen("errorlog.txt", "a");
    fwrite($fh, mysqli_errorno($stmt)." : ");
    fwrite($fh, mysqli_stmt_error($stmt)."\n");
    fclose($fh);
  }

  function insertAgent($agent){
    $sql = "INSERT INTO `agents`(`AgtFirstName`, `AgtMiddleInitial`, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (?,?,?,?,?,?,?)";
    $dbh = mysqli_connect("localhost", "yosk", "password", "travelexperts");  //user and pass is assumed
    if(!$dbh){
      print("Connection Error: ".mysqli_connect_errno().":".mysqli_connect_error().PHP_EOL);
      exit();
    }
    $stmt = mysqli_prepare($dbh, $sql); //creates a statement, a container we can pass back and forth from database
    mysqli_stmt_bind_param($stmt, "ssssssi", $agent["AgtFirstName"], $agent["AgtMiddleInitial"],
      $agent["AgtLastName"], $agent["AgtBusPhone"], $agent["AgtEmail"], $agent["AgtPosition"], $agent["AgencyId"]);  //second param is the datatype of what we are inserting
      $result = mysqli_stmt_execute($stmt);
      if(!$result){
        print( mysqli_stmt_error($stmt));
        $fh = fopen("../errorlog.txt", "a");
        fwrite($fh, mysqli_errorno($stmt)." ");
        fwrite($fh, mysqli_stmt_error($stmt)."\n");
        fclose($fh);
        mysqli_close($dbh);
        return false;
      }
      mysqli_close($dbh);
      return true;
  }

  //param: database handle, table reference
  //return: string
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
    //insert into any given table
  function insertRow($table, $data)
  {
    include("variables.php");
    $message = "";
    $keys = array_keys($data);
    $keystring = implode(",", $keys);
    print("keystring: $keystring<br />");
    $questionmarks = "";
    for ($i=0; $i<count($keys); $i++)
    {
      $questionmarks .= "?,";
    }
    $questionmarks = rtrim($questionmarks, ",");
    $sql = "INSERT INTO $table($keystring)"
      . "VALUES ($questionmarks)";
    print($sql . "<br />");

    $dbh = mysqli_connect($host, $user, $password, $dbname);
    if (!$dbh)
    {
      print(mysqli_connect_error() . "<br />");
      exit();
    }

    //get table info to build type string for bind param function
    $typestring = buildtypestring($dbh, $table->table);
    print($typestring . "<br />");

    $stmt = mysqli_prepare($dbh, $sql);

    //bind the data
    $args = array($typestring);
    reset($keys);
    foreach ($keys as $key)
    {
      $args[] = &$data[$key];
    }
    call_user_func_array(array($stmt,"bind_param"), $args);

    if ($result = mysqli_stmt_execute($stmt))
    {
      $message = "Inserted 1 row";
    }
    else
    {
      $message = "Insert failed, contact tech support";
    }
    mysqli_close($dbh);
    return $message;
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

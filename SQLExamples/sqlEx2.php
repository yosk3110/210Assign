<?php
    include("../dbfunctions.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        //code to test function.php
        $agent = array();
        $agent["AgtFirstName"] = "Fred";
        $agent["AgtMiddleInitial"] = "S";
        $agent["AgtLastName"] = "Smith";
        $agent["AgtBusPhone"] = "403-123-4567";
        $agent["AgtEmail"] = "fred@travelexperts.com";
        $agent["AgtPosition"] = "Junior Agent";
        $agent["AgencyId"] = 1;

        $tableName = "agents";
        $keys = array_keys($agent);
        print_r($keys);
        $keystring = implode(",", $keys);
        print("<br>keystring: $keystring<br />");
        $valuesString = "";
        $arrayLength = count($keys);
        for ($i=0; $i < $arrayLength; $i++)
    		{
    			$valuesString .= "?";
          if($i < $arrayLength - 1){
            $valuesString .= ",";
          }
    		}
        print($valuesString."<br>");
        $sql = "INSERT INTO agents($keystring)"
          . "VALUES ($valuesString)";
        print($sql . "<br />");
        if (insertRow("agents", $agent)){
            print("Agent data inserted into database");
        }
  //else{
  //      print("Insert fail.");
  //  }
    ?>
</body>
</html>

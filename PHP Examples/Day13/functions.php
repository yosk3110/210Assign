<?php
  function getAgentSelect()
  {
    $mysqli = connectDatabase();
    $sql = "SELECT AgentId, AgtFirstName, AgtLastName FROM agents";
    $result = $mysqli->query($sql);
    $selectString = "<select name='AgentId'>";
    while ($row = $result->fetch_array(MYSQLI_NUM))
    {
      $selectString .= "<option value='$row[0]'>$row[1] $row[2]</option>";
    }
    $selectString .= "</select>";
    $mysqli->close();
    return $selectString;
  }

   function connectDatabase()
   {
     $conn = @new mysqli("localhost", "root", "", "travelexperts");
     if ($conn->connect_errno)
     {
       die("Error: ". $conn->connect_error);
     }
     return $conn;
   }

   function updateAgent($agent)
   {
     $mysqli = connectDatabase();
     $sql = "UPDATE agents SET ";
     $keyvals = array();
     foreach ($agent as $k=>$v)
     {
       $keyvals[] = "$k='$v'";
     }
     $setString = implode($keyvals, ", ");
     $sql .= $setString;
     $sql .= " WHERE AgentId= " . $agent['AgentId'];
     print($sql);

     $success = $mysqli->query($sql);

     $mysqli->close();
     return $success;
   }

   function deleteAgent($agentId)
   {
     $mysqli = connectDatabase();
     $sql = "DELETE FROM agents WHERE AgentId=$agentId";

     $success = $mysqli->query($sql);

     $mysqli->close();
     return $success;
   }


   function addAgent($agent)
   {
     $mysqli = connectDatabase();
     //$sql = "INSERT INTO agents(AgentId, AgtFirstName, AgtMiddleInitial, `AgtLastName`, `AgtBusPhone`, `AgtEmail`, `AgtPosition`, `AgencyId`) VALUES (NULL,?,?,?,?,?,?,?)";
     $sql = "INSERT INTO agents(AgentId, AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId) VALUES (NULL,?,?,?,?,?,?,?)";
     $stmt = $mysqli->prepare($sql);
     $stmt->bind_param("ssssssi", $agent["AgtFirstName"], $agent["AgtMiddleInitial"], $agent["AgtLastName"], $agent["AgtBusPhone"], $agent["AgtEmail"], $agent["AgtPosition"], $agent["AgencyId"]);
     $success = 1;
     if(!$stmt->execute())
     {
       //print("Insert failed: " . $mysqli->error);
       $success = 0;
     }
     $mysqli->close();
     return $success;
   }
?>

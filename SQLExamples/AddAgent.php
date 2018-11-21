<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="InsertAgentData.php" method="post">
      FirstName: <input type="text" name="AgtFirstName" value=""><br>
      Middle Name: <input type="text" name="AgtMiddleInitial" value=""><br>
      Last Name: <input type="text" name="AgtLastName" value=""><br>
      Phone: <input type="text" name="AgtBusPhone" value=""><br>
      Email: <input type="text" name="AgtEmail" value=""><br>
      Position:
        <select name="AgtPosition">
          <option value="">Select a position</option>
          <option value="Junior Agent">Junior Agent</option>
          <option value="Intermediate Agent">Intermediate Agent</option>
          <option value="Senior Agent">Senior Agent</option>
        </select><br>
      Agency: <input type="number" name="AgencyId" value=""><br>
      <input type="submit" name="" value="Save"><br>
    </form>
  </body>
</html>

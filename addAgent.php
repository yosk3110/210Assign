<?php
  $pageTitle = "Insert New Agent";
  $activePage = "Add Agent"; //flag to inform which page is open
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/tempStyle.css">
  <link rel="stylesheet" href="css/register.css">
  <title><?php echo $activePage ?></title>
</head>
<body>
		<div class="pageWrapper">
			<div class="pageTop">
        <?php include 'templates/navbar.php' ?>
			</div>
			<div class="pageBody">
        <div class="formContainer">
          <form class="form1" action="SQLExamples/insertAgentData.php" method="post">
            <ul class="formlist">
              <li class="rowElements">
                <label for="AgtFirstName">First Name</label>
                <input type="text" id="AgtFirstName" name="AgtFirstName"
                  onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'">
              </li>
              <li class="rowElements">
                <label for="AgtMiddleInitial">Middle Name</label>
                <input type="text" id="AgtMiddleInitial" name="AgtMiddleInitial"
                  onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'" >
              </li>
              <li class="rowElements">
                <label for="AgtLastName">Last Name</label>
                <input type="text" id="AgtLastName" name="AgtLastName"
                  onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'" >
              </li>
              <li class="rowElements">
                <label for="AgtBusPhone">Phone Number</label>
                <input type="text" id="AgtBusPhone" name="AgtBusPhone"
                  onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'" >
              </li>
              <li class="rowElements">
                <label for="AgtEmail">Agent Email</label>
                <input type="text" id="AgtEmail" name="AgtEmail"
                  onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'" >
              </li>
              <li class="rowElements">
                <label for="AgtPosition">Agent Position</label>
                <select name="AgtPosition" id="AgtPosition">
                  <option value="">Select a position</option>
                  <option value="Junior Agent">Junior Agent</option>
                  <option value="Intermediate Agent">Intermediate Agent</option>
                  <option value="Senior Agent">Senior Agent</option>
                </select>
              </li>
              <li class="rowElements">
                <label for="AgencyId">Agency ID</label>
                <select name="AgencyId" id="AgencyId">
                  <option value="">Select Agency ID</option>
                  <option value=1>1</option>
                  <option value=2>2</option>
                </select>
              </li>
              <li class="rowElements">
                <label for="AgtPassword">Agent Password</label>
                <input type="password" id="AgtPassword" name="AgtPassword"
                  onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'" >
              </li>
              <li class="rowElements">
                <input type="submit" value="Register"/>
                <input type="reset" value="Reset Form" onclick="return resetColor()"/>
              </li>
            </ul>
          </form>
        </div>
			</div>
      <?php include 'templates/footer.php' ?>
		</div>
</body>
</html>

<?php
  session_start();
  $pageTitle = "Log In Page";
  $activePage = "Log In"; //flag to inform which page is open
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/tempStyle.css">
  <link rel="stylesheet" href="css/register.css">
  <title>Template</title>
</head>
<body>
		<div class="pageWrapper">
			<div class="pageTop">
        <?php include 'templates/navbar.php' ?>
			</div>
			<div class="pageBody">
        <div class="formContainer">
          <form class="form1" action="verifyLogin.php" method="post">
            <ul class="formlist">
              <li class="rowElements">
                <label for="AgentId">Agent ID</label>
                <input type="text" id="AgentId" name="AgentId">
              </li>
              <li class="rowElements">
                <label for="AgtPassword">Password</label>
                <input type="password" id="AgtPassword" name="AgtPassword">
              </li>
              <li class="rowElements">
                <input type="submit" value="Log In"/>
              </li>
            </ul>
            <p class="warningText">
              <?php
                if (isset($_SESSION["message"])) {
                  print($_SESSION["message"]);
                  $_SESSION["message"] = "";
                }
              ?>
            </p>
          </form>
        </div>
			</div>
      <?php include 'templates/footer.php' ?>
		</div>
</body>
</html>

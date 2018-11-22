<?php
  session_start();
  $pageTitle = "Register";
  $activePage = "Register"; //flag to inform which page is open
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/reset.css">
	<script type="text/javascript" src="jsFiles/register.js"></script>
  <link rel="stylesheet" href="css/tempStyle.css">
  <link rel="stylesheet" href="css/register.css">
  <title>Registeration Form</title>
</head>
<body>
	<div class="pageWrapper">
		<div class="pageTop">
      <?php include 'templates/navbar.php' ?>
		</div>
		<div class="pageBody">
      <div class="formContainer">
        <form id="form1" action="bouncer.php" method="post"  onsubmit="return validate(this)">
          <ul class="formList">
            <li class="rowElements">
              <label for="fname">First Name</label>
  						<input type="text" id="fname" name="fname"
  							onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'" required>
            </li>
            <li class="rowElements">
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="lname"
                onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'" required>
            </li>
            <li class="rowElements">
              <label for="phone">Home Phone</label>
    					<input type="text" id="phone" name="phone" pattern="^\(?\d{3}\)?-?\d{3}-?\d{4}$"
    						onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'">
            </li>
            <li class="rowElements">
              <label for="bphone">Buisness Phone</label>
    					<input type="text" id="bphone" name="bphone" pattern="^\(?\d{3}\)?-?\d{3}-?\d{4}$"
    						onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'">
            </li>
            <li class="rowElements">
              <label for="address">Address</label>
              <input type="text" id="address" name="address"
                onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'">
            </li>
            <li class="rowElements">
              <label for="city">City</label>
              <input type="text" id="city" name="city"
                onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'">
            </li>
            <li class="rowElements">
              <label for="province">Province</label>
              <select name="province" id="province">
                <option value="">Select a province</option>
                <option value="ab">Alberta</option>
                <option value="bc">British Columbia</option>
                <option value="sk">Saskatchwan</option>
                <option value="mn">Manitoba</option>
                <option value="on">Ontario</option>
                <option value="qb">Quebec</option>
              </select>
            </li>
            <li class="rowElements">
              <label for="postal">Postal Code</label>
              <input type="text" id="postal" name="postal"
                onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'">
            </li>
            <li class="rowElements">
              <label for="email">Email</label>
              <input type="text" id="email" name="email"
                onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'">
            </li>
            <li class="rowElements">
              <label for="user">User Name</label>
              <input type="text" id="user" name="user"
                onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'" required>
            </li>
            <li class="rowElements">
              <label for="pass">Password</label>
    					<input type="password" id="pass" name="pass"
                onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'" required>
            </li>
            <li class="rowElements">
              <input type="submit" value="Register"/>
              <input type="reset" value="Reset Form" onclick="return resetColor()"/>
            </li>
          </ul>
        </form>
        <p id="tips" class="tips"></p>
        <p id="warning" class="warning">
          <?php
            if (isset($_SESSION["message"])) {
              print($_SESSION["message"]);
              $_SESSION["message"] = "";
            }
          ?>
        </p>
      </div>
    </div>
    <?php include 'templates/footer.php' ?>
	</div>
</body>
</html>

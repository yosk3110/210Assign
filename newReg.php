<?php
  $pageTitle = "Register";
  $activePage = "Register"; //flag to inform which page is open
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
	<script type="text/javascript" src="jsFiles/register.js"></script>
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="css/tempStyle.css">
  <title>Template</title>
</head>
<body>
	<div class="pageWrapper">
		<div class="pageTop">
      <?php include 'templates/navbar.php' ?>
		</div>
		<div class="pageBody">
      <p id="tips" class="tips"></p>
			<p id="warning" class="warning"></p>
			<table class="form" >
			<form id="form1" method="post" action="bouncer.php" onsubmit="return validate(this)">
				<tr>
					<td>
						<label for="fname">First Name</label>
						<input type="text" id="fname" name="fname"
							onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'"></input>
					</td>
				</tr>
				<tr>
					<td>
					<label for="lname">Last Name</label>
					<input type="text" id="lname" name="lname"
						onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'">
					</td>
				</tr>
				<tr>
					<td>
					<label for="phone">Phone</label>
					<input type="text" id="phone" name="phone" pattern="^\(?\d{3}\)?-?\d{3}-?\d{4}$"
						onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'">
					</td>
				</tr>
				<tr>
					<td>
					<label for="address">Address</label>
					<input type="text" id="address" name="address"
						onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'">
					</td>
				</tr>
				<tr>
					<td>
					<label for="city">City</label>
					<input type="text" id="city" name="city"
						onfocus="tipsUpdate(tips, this);" onblur="tips.style.visibility = 'hidden'">
					</td>
				</tr>
				<tr>
					<td>
						<label for="province">Province</label>
						<select name="province" id="province" style="width:100%">
							<option value="">Select a province</option>
							<option value="ab">Alberta</option>
							<option value="bc">British Columbia</option>
							<option value="sk">Saskatchwan</option>
							<option value="mn">Manitoba</option>
							<option value="on">Ontario</option>
							<option value="qb">Quebec</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
					<label for="postal">Postal Code</label>
					<input type="text" id="postal" name="postal">
					</td>
				</tr>
				<tr>
					<td>
					<label for="birth">Birth Date</label>
					<input type="date" id="birth" name="birth" >
					</td>
				</tr>
				<tr>
					<td>
					<label for="pass">Password</label>
					<input type="password" id="pass" name="pass" >
					</td>
				</tr>
				<tr>
					<td>
						<label for="comments">Comments</label>
						<textarea name="comments" id="comments" placeholder="Comments...." rows="3" style="width:100%"></textarea>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Register"/>
						<input type="reset" value="Reset Form" onclick="return confirm('Are you sure you want to reset?')"/>
					</td>
				</tr>
			</form>
			</table>			</div>
    <?php include 'templates/footer.php' ?>
	</div>
</body>
</html>

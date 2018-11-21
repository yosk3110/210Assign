<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<link rel="icon" href="media/favicon.ico"/>
    <link rel="stylesheet" href="/css/newStyle.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			input[type=text], input[type=number], input[type^=pass], input[type=date]{
				width: 100%;
				margin: 5px 0;
				box-sizing: border-box;
			}
			input[type=text]:focus, input[type=password]:focus, input[type=number]:focus{
				background-color:lightcyan;
				border: 2px solid grey;
			}
			input[type=submit], input[type=reset]{
				background-color: lightblue;
				padding:10px 15px;
				margin 5px 5px;
			}
			.form{
				width: 100%;
				border-radius: 5px;
				background-color: lightgrey;
				padding: 15px;
			}
			.tips{
				visibility: hidden;
				position: absolute;
				left: 60%;
				top: 30%;
				background-color: greenYellow;
			}
			.warning{
				position: absolute;
				left: 60%;
				top: 40%;
				color:red;
			}
		</style>
		<script type="text/javascript">
			//HTML has the pattern attribute which can also check for RegExp
			function validate(theForm){
				// you can pass through the form object as an argument too
				var myForm = document.getElementById(form1);	//can get form object by id
				var formReg = /^[A-Z]\d[A-Z] ?\d[A-Z]\d$/i
				var message = "";
				//forms is the array of forms on a page
				if(!formReg.test(theForm.postal.value)){
					//alert("Postal Code incorrect");
					message += "Invalid Postal Code format: Should be X9X 9X9<br>";
					console.log(message);
					theForm.postal.focus();
					theForm.postal.style.backgroundColor = "pink";
					document.getElementById("warning").innerHTML = message;
				}
				if(message)
				{
					return false;
				}

				return confirm("Do you want to submit your form?");
			}

			function getConfirmation(){
				return confirm("Do you want to submit your form?");
			}

			function tipsUpdate(tips, section){
				if(section.id == 'fname'){
					tips.innerHTML = "Enter your first name"
					console.log(tips.value);
				}
				else if (section.id == 'lname') {
					tips.innerHTML = "Enter your last name"
				}
				else if (section.id == 'phone') {
					tips.innerHTML = "Enter your phone number<br>###-###-####"
				}
				else if (section.id == 'address') {
					tips.innerHTML = "Enter your address"
				}

				tips.style.visibility = 'visible';
			}
		</script>
	</head>
	<body>
		<div class="page">
	    <div class="top">
				<div class="logo">
	        <img src="travel/logo.png">
	      </div>
	      <div class="navContainer">
	        <div class="titleBar">
	          Page Title
	        </div>
	        <ul>
	          <li><a href="newMain.php">Home</a></li>
	          <li><a href="contact.php">Contact</a></li>
	          <li class="active"><a href="register.php">Register</a></li>
	        </ul>
	      </div>
	    </div>
	    <div class="bottom">
				<!--bouncer script is a test script to check what was recieved on the server-->
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
				</table>
			</div>
	    <footer>
	      Copyright &copy; 2018
	    </footer>
	  </div>
	</body>
</html>

<?php
	$pageTitle = "Welcome to Travel Experts";
	$hour = date("H");
 ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Travel Experts</title>
		<link rel="stylesheet" href="mainstyle.css"/>
		<script type="text/javascript" src="mainScripts.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<header>
		<img src="travel/logo.png" style="height:100%;">
		<h1>Welcome To Travel Experts</h1>
		<h2 style="text-align:center">
			<script>
				document.write("Today: " + getToday());
			</script>
		</h2>
		</header>
		<?php
			if($hour >= 0 and $hour < 12){
				print("Good Morning");
			}
			elseif ($hour >= 12 and $hour < 18) {
				print("Good Afternoon");
			}
			else{
				print("Good Evening");
			}
		?>
		<h3>H3</h3>
		<div class="container">
			<div id="heroCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-traget="#heroCarousel" data-slide-to="0" class="active"></li>
					<li data-traget="#heroCarousel" data-slide-to="1"></li>
					<li data-traget="#heroCarousel" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">
						<img src="travel/images/citypark.jpg" alt="citypark" style="width:100%;">
					</div>
					<div class="item">
						<img src="travel/images/rockies.jpg" alt="rockies" style="width:100%;">
					</div>
					<div class="item">
						<img src="travel/images/nightcity.jpg" alt="nightcity" style="width:100%;">
					</div>
				</div>

				<a href="#heroCarousel" class="left carousel-control" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#heroCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
			</div>
		</div>

			<!--
			<table class="imagetable">
				<tr>
					<td><img src="travel/images/rockies.jpg"></td>
					<td><img src="travel/images/island.jpg"></td>
					<td><img src="travel/images/tropicalisland.jpg"></td>
				</tr>
				<tr>
					<td><img src="travel/images/citypark.jpg"></td>
					<td><img src="travel/images/nightcity.jpg"></td>
				</tr>
			</table>
			<br clear="all"/>
-->
		<a href="http://microsoft.com">Microsoft</a><br/>
		<a href="http://apple.com">Apple</a><br/>
		<a href="links.php">Links</a><br/>

		<div class="flex-gallery">
			<div class="media"><img src="photos/horse.png" alt="horse"></div>
			<div class="media"><img src="travel/images/rockies.jpg"></div>
			<div><img src="travel/images/island.jpg"></div>
			<div><img src="travel/images/tropicalisland.jpg"></div>
			<div><img src="travel/images/citypark.jpg"></div>
			<div><img src="travel/images/nightcity.jpg"></div>
		</div>

		<nav>
			<a href="contact.php"><img src="travel/contacts.png" class="icons"/></a>
			<a href="register.php"><img src="travel/register.png" class="icons"/></a>
		</nav>
		<footer>
			Copyright &copy; 2018
		</footer>
	</body>
</html>

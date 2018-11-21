<?php
  $pageTitle = "Template Page";
  $activePage = "Home"; //flag to inform which page is open
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/tempStyle.css">
  <title>Template</title>
</head>
<body>
		<div class="pageWrapper">
			<div class="pageTop">
        <?php include 'templates/navbar.php' ?>
			</div>
			<div class="pageBody">
        <div class="flex-gallery">
          <div class="media"><img src="photos/horse.png" alt="horse"></div>
          <div class="media"><img src="travel/images/rockies.jpg"></div>
          <div><img src="travel/images/island.jpg"></div>
          <div><img src="travel/images/tropicalisland.jpg"></div>
          <div><img src="travel/images/citypark.jpg"></div>
          <div><img src="travel/images/nightcity.jpg"></div>
        </div>
			</div>
      <?php include 'templates/footer.php' ?>
		</div>
</body>
</html>

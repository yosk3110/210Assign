<?php
  $pageTitle = "Welcome To Travel Experts";
  $activePage = "Home"; //flag to inform which page is open
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/tempStyle.css">
  <link rel="stylesheet" href="css/homeStyle.css">
  <title><?php echo $activePage ?></title>
  <script type="text/javascript">
    var travelImages = [new Image(), new Image(), new Image(), new Image(), new Image(), new Image()];
    travelImages[0].src = "images/kyoto.jpeg"
    travelImages[1].src = "images/mt-fuji.jpeg"
    travelImages[2].src = "images/new-york.jpeg"
    travelImages[3].src = "images/london.jpeg"
    travelImages[4].src = "images/paris.jpeg"
    travelImages[5].src = "images/rockies.jpeg"
    var travelDetails = [
      "Kyoto, Japan",
      "Mount Fuji, Japan",
      "New York, New York",
      "London, UK",
      "Paris, France",
      "Banff, Canada"]
    var travelUrls = [
      "https://kyoto.travel/en",
      "https://www.japan-guide.com/e/e2172.html",
      "https://www.nycgo.com/",
      "https://www.londontourism.ca/",
      "https://en.parisinfo.com/",
      "http://banffandbeyond.com/"]

      function displayImage(index){
        document.getElementById("imageTag0").src = travelImages[index].src;
      }
      //annonamous function
      var showURL = function (index){
        var win1 = open(travelUrls[index]);
        var timer = setTimeout(function(){win1.close();}, 10000);
      }
  </script>
</head>
<body>
		<div class="pageWrapper">
			<div class="pageTop">
        <?php include 'templates/navbar.php' ?>
			</div>
			<div class="pageBody">
        <h2>Some Amazing Travel Destinations</h2>
        <div class="infoBox">
          <div class="descBox">
          <script type="text/javascript">
            for (var i = 0; i < travelImages.length; i++) {
              document.write("<h3 onmouseover='displayImage(" + i + ");'>" + travelDetails[i] + "</h3>");
            }
          </script>
          </div>
          <div class="imgBox">
            <img id="imageTag0" src="images/kyoto.jpeg">
          </div>
        </div>
        <!--
        <div class="flex-gallery">
          <div class="media"><img src="photos/horse.png" alt="horse"></div>
          <div class="media"><img src="travel/images/rockies.jpg"></div>
          <div><img src="travel/images/island.jpg"></div>
          <div><img src="travel/images/tropicalisland.jpg"></div>
          <div><img src="travel/images/citypark.jpg"></div>
          <div><img src="travel/images/nightcity.jpg"></div>
        </div>
      -->
			</div>
      <?php include 'templates/footer.php' ?>
		</div>
</body>
</html>

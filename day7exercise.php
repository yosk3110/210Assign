<!DOCTYPE html>
<html>
	<head>
		<title>Main Page</title>
		<script>
			//var travelImages = new Array(new Image(), new Image(), new Image());
			//var travelImages = [new Image(), new Image(), new Image()];
			var travelImages = new Array();
			travelImages[0] = new Image();
			travelImages[0].src = "media/IguassuFallsBrazilColloidConf.jpg";
			travelImages[1] = new Image();
			travelImages[1].src = "media/GoldenGateBridge.jpg";
			travelImages[2] = new Image();
			travelImages[2].src = "media/DenmarkCopenhagen.jpg";

			var travelDescs = ["Visit Iguassu Falls",
				"San Francisco's Golden Gate Bridge",
				"Take a trip to Copenhagen"];

			var travelURLs = ["https://iguazufalls.com/national-park/",
				"https://www.sftravel.com/",
				"https://www.visitcopenhagen.com/copenhagen-tourist"
				];

			var showURL = function (idx)
			{
				var win1 = open(travelURLs[idx]);
				var timer = setTimeout(function(){ win1.close(); }, 3000);
			}
		</script>
	</head>
	<body>
		<h1>Vacation Destinations Available</h1>
		<table>
			<script>
				for (i=0; i < travelDescs.length; i++)
				{
					document.write("<tr>");
					document.write("<td>" + travelDescs[i] + "</td>");
					document.write("<td></td>");
					document.write("</tr>");
				}
			</script>
		</table>
		
		<?php
			include("nav.php");
		?>

	</body>
</html>

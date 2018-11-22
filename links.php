<?php
  include_once("variables.php");
  $pageTitle = "Links";
  $activePage = "Links"; //flag to inform which page is open
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/tempStyle.css">
  <title>Template</title>
</head>
<body>
		<div class="pageWrapper">
			<div class="pageTop">
        <?php include 'templates/navbar.php' ?>
			</div>
			<div class="pageBody">
        <?php
          print("<table>");
            $i = 1;
            foreach ($urls as $key=>$value) {
              print("<tr><td>$i. </td>");
              print("<td><a href='$value'>Link: $key</a></td></tr>");
              $i++;
            }
          print("</table><br>");
          $array = localTime(time(), true);
          print_r($array);
          print("<br>".time()."<br>");
          print(mktime(2,30,0,11,14,2019)."<br>");
          print(date("l, Y/F/d/ h:i:s A, e")."<br>");
          date_default_timezone_set("MST");
          print(date("l, Y/F/d/ h:i:s A, e")."<br>");

          $globalVar = 1;
          function incrementer($localVar){
            print("incrementer localVar = $localVar <br>");
            return ++$localVar;
          }

         ?>
			</div>
      <?php include 'templates/footer.php' ?>
		</div>
</body>
</html>

<?php
  if(!isset($pageTitle)){
    $pageTitle = "Nav Template";
  }
  $pageArray = array("Home" => "index.php", "Links" => "links.php","Register" => "register.php", "Contacts" => "contact.php");
?>
    <div class="navWrapper">
      <div class="logoContainer">
        <img src="travel/logo.png">
      </div>
      <div class="navRight">
        <div id="pageTitle" class="titleContainer">
          <?php print("$pageTitle"); ?>
        </div>
          <ul class="navBar">
            <?php
              if(!isset($activePage)){
                $activePage = "";
              }
              foreach ($pageArray as $name => $url) {
                print("<li class=\"navElement ");
                if($activePage == $name){
                  print("active");
                }
                print("\"><a href=\"$url\">".$name."</a></li>");
              }
            ?>
          </ul>
      </div>
    </div>

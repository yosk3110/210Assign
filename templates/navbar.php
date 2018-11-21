<?php
  if(!isset($pageTitle)){
    $pageTitle = "Nav Template";
  }
  $pageArray = array("Home" => "index.php", "Links" => "links.php","Register" => "register.php", "Contacts" => "contact.php");
?>
    <style>
      html{
        font-family: sans-serif;
        box-sizing: border-box;
      }
      .navWrapper{
        display: flex;
        flex-direction: row;
        flex-grow: 1;
        max-height: 20%;
        width: 100%;
        background-color: #0b3241;
        min-height: 0;
        min-width: 0;
      }
      .logoContainer{
        padding: 0;
        margin: 0;
        max-width: 12%;
        max-height: 100%;
        min-width: 0;
        min-height: 0;
      }
      .logoContainer img{
        max-height: 100%;
        max-width: 100%;
        height: auto;
        flex-shrink: 1;
        min-width: 0;
        min-height: 0;
        display: block;
      }
      .navRight{
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        background-color: #87ceeb;
        flex-grow: 1;
      }
      .titleContainer{
        font-size: 2.8em;
        text-align: center;
        background-color: #166483;
        color: white;
      }
      .navBar{
        display: flex;
        background-color: #2196c4;
        flex-direction: row;
        list-style: none;
        padding: 0;
        margin:0;
        flex-wrap: wrap;
      }
      .navElement{
        background-color: #d3edf8;
        padding: 3px 5px;
        font-size: 1.5em;
        text-align: center;
      }
      .navElement:hover{
        background-color: #87ceeb;
      }
      .navElement a{
        color:#166483;
        text-decoration: none;
      }
      .active{
        background-color: #07212c;
      }
      .active a{
        color:#d3edf8;
        font-weight: bolder;
      }
      @media (max-width: 500px) {
        .titleContainer{
          font-size: 2em;
        }
        .navWrapper{
          max-height: 10%;
        }
        .logoContainer{
          max-width: 100%;
        }
        .navElement {
        flex: 100%;
        max-width: 100%;
        font-size: 1.2em;
        }
      }
    </style>
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

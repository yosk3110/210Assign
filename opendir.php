<?php
  $dh = opendir("C:\\Users\\801085\\Documents\\210Website");
  while ($item = readdir($dh)){
    if(filetype($item) == "dir"){
      print("Directory Name: $item <br>");
    }
    else{
      print("filename: $item, filetype: <br>");
    }
  }
  closedir($dh);
?>

<?php
  $lines = file("variables.php"); //file() just reads a file into an array
  $lines = array_reverse($lines);

  foreach ($lines as $line) {
    print($line); //reading a file usually leaves the \n so it can mess with formats
  }

  $fh = fopen("datafile.txt", "r");
  while(!feof($fh)){
    $string = rtrim(fgets($fh));  //trim gets rid of the newline
    $string = print("<h1>$string</h1>");
  }
  fclose($fh);

  $hash = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);//remember to remove newline if needed
  echo $hash."<br>";

  if (password_verify('rasmuslerdorf', $hash)) {
      echo 'Password is valid! <br>';
  } else {
      echo 'Invalid password.';
  }

  $hash = password_hash("pass1", PASSWORD_DEFAULT);//remember to remove newline if needed
  echo $hash."<br>";
  $hash = password_hash("pass2", PASSWORD_DEFAULT);//remember to remove newline if needed
  echo $hash."<br>";
  $hash = password_hash("pass3", PASSWORD_DEFAULT);//remember to remove newline if needed
  echo $hash."<br>";
?>

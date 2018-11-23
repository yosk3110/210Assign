<?php

//$fruit = array("apples","pears","oranges","plums");

$fruit = array();
$fruit[] = "apples";
$fruit[] = "pears";
$fruit[] = "oranges";
$fruit[] = "plums";

for($i=0;$i<4;$i++) {
	echo $fruit[$i]."<br>";
}

?>
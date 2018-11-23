<?php

$name3="Simon";
$name="Gord";

function name1($name) {
    $name = "Aaron";
	return "Bob";
}

function name2(&$name2) {
	//global $name2;
	$name2="Ian";
	return $name2;
}

function name3($name3) {
	echo $name3;
}

echo "The two names are: ".name1($name)." and ".name2($name2)."<br>";
echo "The variables are: ".$name." ".$name2."<br>";
echo name3($name3);


?>

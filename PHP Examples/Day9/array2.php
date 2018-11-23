<?php

$soups = array("Monday"=>"Squash","Tuesday"=>"Chicken Noodle","Wednesday"=>"Vegetable");

//$fruit = array(0=>"apples",1=>"pears",2=>"oranges",3=>"plums");

var_dump($soups);
echo "<br>";
echo "Count of elements:".count($soups);
echo "<br>";

$specials = array();
$specials[2] = "Tomato";
$specials[50] = "Cream of Broccoli";

print_r($specials);
echo "<br>";
echo "Count of elements:".count($specials);
echo "<br>";

$newarray = array_merge($specials,$soups);

print_r($newarray);
echo "<br>";
echo "Count of elements:".count($newarray);
echo "<br>";

?>

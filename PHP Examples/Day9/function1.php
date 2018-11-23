<?php

function today($time,$message='Starting time') {
	echo "The time is $time and its:<br>";
	echo "$message\n<br />";
}

today("8:00a.m.");
today("11:30a.m.", "Lunch time");
today("3:00p.m.", "Quitting time");

?>

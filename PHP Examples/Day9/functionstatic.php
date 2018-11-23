<?php

function counter() {
	static $hits = 0; 
	return $hits+=1;
}

echo counter()."<br>";
echo counter()."<br>";
echo counter()."<br>";
echo counter()."<br>";
echo counter()."<br>";

?>
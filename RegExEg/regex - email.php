<?php

$reg = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

if(preg_match($reg,"amw124@gmail.com")) 
{
	echo "pattern matched";
}
else 
{
	echo "pattern did not match";
}

$reg = "";




?>

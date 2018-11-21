<?php
$username = "aaaa";

if (preg_match("/[^a-z]/",$username, $match))
    echo "Username must be all lowercase!<br>";

var_dump($match);

?>

<?php

//Note: the & in front of $salary causes the variable to be passed as a reference

//function tax($salary) {
function tax(&$salary) {
	$salary = $salary-500;
	//$salary -= 500;
	return $salary;
}

$salary = 2500;
echo (tax($salary));
echo "<br>$salary";

?>

<?php
	$handle = fopen("userlist.txt", "w");
	fwrite($handle, "user1," . md5("abc") . "\n");
	fwrite($handle, "user2," . md5("def") . "\n");
	fwrite($handle, "user3," . md5("ghi") . "\n");
	fclose($handle);
?>

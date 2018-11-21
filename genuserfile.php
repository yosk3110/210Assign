<?php
	$handle = fopen("userlist.txt", "w");
	fwrite($handle, "user1," . password_hash("pass1", PASSWORD_DEFAULT) . "\n");
	fwrite($handle, "user2," . password_hash("pass2", PASSWORD_DEFAULT) . "\n");
	fwrite($handle, "user3," . password_hash("pass3", PASSWORD_DEFAULT) . "\n");
	fclose($handle);
?>

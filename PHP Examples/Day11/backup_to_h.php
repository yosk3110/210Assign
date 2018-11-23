<?php
	$source = "C:\\Users\\hpeters\\Documents\\wamp\\www";
	$dest = "h:\\backup";
	
	function recurseDirectory($filename, $destdir, $log)
	{
	   chdir($filename);
	   $dirlist = scandir($filename);
	   foreach ($dirlist as $nextfile)
	   {
	      if (is_dir($nextfile))
		  {
		     if ($nextfile == "." || $nextfile == "..")
			 {
			    //do nothing as these are exception cases
			 }
			 else
			 {
			    fwrite($log, "Changing Directory: filename:$filename nextfile:$nextfile\r\n");
			    $nextdir = $destdir . "\\" . $nextfile;
			    mkdir($nextdir);
			    recurseDirectory($filename . "\\" . $nextfile, $nextdir, $log);
			 }
		  }
		  else
		  {
		     fwrite($log, "Copying $nextfile to H: drive\r\n");
		     copy($filename . "\\" . $nextfile, $destdir . "\\" . $nextfile);
		  }
	   }
	   chdir("..");
	   
	}

	//rename the old backup directory with a timestamp
	if (file_exists($dest))
	{
	   rename($dest, $dest . time());
	}
	//create a new empty backup directory
	mkdir($dest) || (fwrite($log, "Backup directory creation failed\r\n") && die("Backup directory creation failed\n"));
	
	$log = fopen($dest . "\\runlog.txt", "w");
	fwrite($log, "Starting backup\r\n");
	fwrite($log, "*****************************************************************\r\n");
	fwrite($log, "* BACKING UP WAMP SERVER ROOT DIRECTORY TO H: DRIVE             *\r\n");
	fwrite($log, "*****************************************************************\r\n");

    //go to source directory and start copying files
	if (file_exists($source))
	   recurseDirectory($source, $dest, $log);
	else
	{
	   fwrite($log, "directory not found\r\n");
	   die ("directory not found\n");
	}
	fwrite($log, "Finishing backup\r\n");
	fclose($log);
?>

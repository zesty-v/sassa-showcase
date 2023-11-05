<?php

session_start();

	$configfile = 'config.xml';

	//Load config files.
	$config = simplexml_load_file($xmlfile) or die('Error: Cannot create xml object: xmlfile');
		
	//Check critical variable are set;
	if (!isset($_SESSION['loggedin'])) {$_SESSION['loggedin'] = false;}

?>

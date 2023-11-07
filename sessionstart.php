<?php

session_start();

    // Assists in logging errors in the browser console.
    header('Content-Type: application/json');

	// $configfile = 'config.xml';

	// Load config files.
	// $config = simplexml_load_file($xmlfile) or die('Error: Cannot create xml object: xmlfile');
		
	//Check critical variable are set;
	if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) 
        {
            $_SESSION['loggedin'] = false;
            header('Location: login.php');
            exit;
        }

?>

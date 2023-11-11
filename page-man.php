<?php

    // Start or keep the session going.
    // if (session_status() == PHP_SESSION_NONE) { session_start(); $_SESSION['loggedin'] = false;}
    session_start();

    // If called from the login.php file, ignore.
    if ($_SERVER['SCRIPT_FILENAME'] !== $_SERVER['DOCUMENT_ROOT'] . '/login.php') {

        // Avoid direct access without login.
        if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {

            error_log('Redirect done!!!');
            header('Location: login.php'); 
            exit;
        
        }
    } else {
        
        error_log('Redirect avoided since its called from login.php!!!');
    
    }

?>
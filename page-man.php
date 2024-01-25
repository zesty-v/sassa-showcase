<?php

    // Start or keep the session going.
    // if (session_status() == PHP_SESSION_NONE) { session_start(); $_SESSION['loggedin'] = false;}
    session_start();

    // If called from the login.php file, ignore.
    if ($_SERVER['SCRIPT_FILENAME'] !== $_SERVER['DOCUMENT_ROOT'] . '/login.php') {

        // Avoid direct access without login.
        if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {

            // Go back to login.
            header('Location: /login.php'); 
            exit;
        
        }
        
    } 

    // Check which page was called.
    switch($_SERVER['SCRIPT_FILENAME']) {

        case $_SERVER['DOCUMENT_ROOT'] . '/login.php':
            $_SESSION['curr-id'] = '';
            break;

        case $_SERVER['DOCUMENT_ROOT'] . '/id-not-found.php':
            $_SESSION['curr-id'] = '';
            break;

        case $_SERVER['DOCUMENT_ROOT'] . '/menu.php':
            $_SESSION['curr-id'] = '';
            break;

        case $_SERVER['DOCUMENT_ROOT'] . '/grantpages/child-support.php':
            $_SESSION['curr-id'] = $_GET['idNumber'];
            break;

        case $_SERVER['DOCUMENT_ROOT'] . '/grantpages/child-support-docs.php':
            break;

        case $_SERVER['DOCUMENT_ROOT'] . '/grantpages/older-persons.php':
            $_SESSION['curr-id'] = $_GET['idNumber'];
            break;

        case $_SERVER['DOCUMENT_ROOT'] . '/grantpages/older-persons-docs.php':
            break;

        case $_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-auth.php':
            break;

        case $_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-photo-id-verification.php':
            break;

        case $_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-profile-id-verification.php':
            break;

        case $_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-real-time-id-verification.php':
            break;

        default:
            break;
    }

?>
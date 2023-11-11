<?php

include 'page-man.php';
include 'dn-api/dn-active-check.php';
include 'dw-api/dw-active-check.php';


// Static credentials
$valid_username = 'sytze';
$valid_password = 'Rhopalocera777!';

$_SESSION['loggedin'] = false;
$_SESSION['loginmsg'] = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        // Retrieve the form data
        $username = $_POST['username'];
        $password = $_POST['password'];
        error_log($username . ' 1 ' . $password);
    
        // Validate the credentials
        if ($username !== $valid_username || $password !== $valid_password)
            {

                // User name and password combination is incorrect.
                $_SESSION['loggedin'] = false;
                $_SESSION['loginmsg'] = 'The login credentials are incorrect';
                error_log($username . ' 2 ' . $password);
                header('Location: login.php');
                exit;
            }
        else
            {
                // User name and password is fine.
                $_SESSION['loggedin'] = false;
                $_SESSION['loginmsg'] = 'Please log in...';
                error_log($username . ' 3 ' . $password);
                header('Location: menu.php');
                exit;

            }
    }

else 
    
    {
        // Request from login page is not a POST request, redirect to the login form.
        $_SESSION['loggedin'] = false;
        $_SESSION['loginmsg'] = 'The login credentials are incorrect';
        error_log($username . ' 4 ' . $password);
        header('Location: login.php');
        exit;
    }

?>
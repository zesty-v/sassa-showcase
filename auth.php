<?php

session_start();

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
    
        // Validate the credentials
        if ($username !== $valid_username || $password !== $valid_password)
            {

                // User name and password combination is incorrect.
                $_SESSION['loggedin'] = false;
                $_SESSION['loginmsg'] = 'The login credentials are incorrect';

                header('Location: login.php');
                exit;
            }
        else
            {
                // User name and password is fine.
                $_SESSION['loggedin'] = true;
                $_SESSION['loginmsg'] = 'Please log in...';

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
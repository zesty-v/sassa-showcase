<?php

// auth.php

// Static credentials
$valid_username = 'sytze';
$valid_password = 'Rhopalocera777!';
$_SESSION['loggedin'] = False;

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
                $_SESSION['loggedin'] = False;
                header('Location: login.php');
                exit;
            }
        else
            {
                // User name and password is fine.
                $_SESSION['loggedin'] = True;
                header('Location: menu.php');
                exit;

            }
    }

else 
    
    {
        // Request from login page is not a POST request, redirect to the login form.
        $_SESSION['loggedin'] = False;
        header('Location: login.php');
        exit;
    }

?>
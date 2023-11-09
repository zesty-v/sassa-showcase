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

                // Redir back to the login page
                header('Location: login.php');
                $_SESSION['loggedin'] = False;
                exit;
            }
    }

else 
    
    {
        // Not a POST request, redirect to the login form.
        $_SESSION['loggedin'] = False;
        header('Location: login.php');
        exit;
    }

// If we got this far the login was a success.
// Redir back to the login page
header('Location: menu.php');
$_SESSION['loggedin'] = True;
exit;

?>
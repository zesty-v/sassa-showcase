<?php

session_start();

// Static credentials --> add more if you want to.
$credentials = [
    'sytze' => 'Rhopalocera777!',
    'jason' => 'getmein!', 
    'test' => 'test'
];

$_SESSION['loggedin'] = false;
$_SESSION['loginmsg'] = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Retrieve the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the credentials
    if (!isset($credentials[$username]) || $credentials[$username] !== $password) {

        // User name and password combination is incorrect.
        $_SESSION['loggedin'] = false;
        $_SESSION['loginmsg'] = 'The login credentials are incorrect';

        //Make audit Entry
        $_SESSION['sessionAudit'][] = time() . ': ' . $_SESSION['userName'] . ' User login failed.';

        header('Location: login.php');
        exit;
    } else {
        // User name and password is fine.
        $_SESSION['loggedin'] = true;
        $_SESSION['loginmsg'] = 'Please log in...';
        $_SESSION['userName'] = $username;
        
        //Make audit Entry
        $_SESSION['sessionAudit'][] = time() . ': ' . $_SESSION['userName'] . ' User login succeeded.';
        
        //Go to menu page.
        header('Location: menu.php');
        exit;
    }
} else {

    // Request from login page is not a POST request, redirect to the login form.
    $_SESSION['loggedin'] = false;
    $_SESSION['loginmsg'] = 'The login credentials are incorrect';
    header('Location: login.php');
    exit;
}
?>

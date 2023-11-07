<?php

// auth.php

// Static credentials
// WARNING: Never store credentials like this for a production system.
$valid_username = 'testuser';
$valid_password = 'password';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Validate the credentials
    if ($username === $valid_username && $password === $valid_password) {
        // Credentials are valid
        echo 'Login successful. Welcome, ' . htmlspecialchars($username) . '!';
        // Here you would typically redirect or start a session
    } else {
        // Credentials are invalid
        echo 'Login failed: Incorrect username or password.';
        // Optionally provide a link back to the login page
        echo '<br><a href="login.html">Try again</a>';
    }
} else {
    // Not a POST request, redirect to the login form.
    header('Location: login.html');
    exit;
}

?>

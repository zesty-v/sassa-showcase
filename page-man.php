<?php

    //Start or keep the session going.
    session_start();

    // Avoid direct access without login.
    if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {header('Location: login.php'); exit;}

?>
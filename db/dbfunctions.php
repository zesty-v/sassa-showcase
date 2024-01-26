<?php

function openDatabaseConnection() {
    $servername = "localhost"; // Replace with your server name
    $username = "sassa-user";     // Replace with your username
    $password = "Clavis777";     // Replace with your password
    $dbname = "sassa-db";            // The database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function closeDatabaseConnection($conn) {
    $conn->close();
}

function writeAuditlog($user_name, $idNumber, $action, $description) {
    
    // Open the database connection
    $conn = openDatabaseConnection();

    // Format the audit entry timestamp to include milliseconds
    $timestamp = new DateTime();
    $formattedTimestamp = $timestamp->format('Y-m-d H:i:s.v'); // Assuming $timestamp is a DateTime object
        
    // Prepare the SQL statement to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO audit (timestamp, user_name, id_number, action, description) VALUES (?, ?, ?, ?, ?)");

    // Bind parameters to the prepared statement
    $idNumber =str_replace(' ', '', $idNumber);
    $stmt->bind_param("sssss", $formattedTimestamp, $user_name, $idNumber, $action, $description);

    // Execute the query
    $result = $stmt->execute();

    // Check for successful insertion
    if (!$result) {
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    closeDatabaseConnection($conn);
}

?>
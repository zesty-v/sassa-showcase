<?php

include '/page-man.php';

function dn_isonline() {

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $_SESSION['DN-CONST.PBverifyWS']);
    curl_setopt($ch, CURLOPT_HTTPGET, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'accept: application/json'
    ]);

    // Execute cURL session and get the response
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        curl_close($ch);
        throw new Exception(curl_error($ch));
    }

    // Close cURL session
    curl_close($ch);

    // Decode the response
    $decodedResponse = json_decode($response, true);

    // Check if the response matches the success output
    return isset($decodedResponse['Status']) && $decodedResponse['Status'] === 'Success' 
           && isset($decodedResponse['Result']) && $decodedResponse['Result'] === 'Hello World';
    
}

?>

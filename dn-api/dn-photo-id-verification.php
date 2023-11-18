<?php

function dn_photo_id_verification($id_number, $reference_number) {

    // Initialize cURL session
    $ch = curl_init($_SESSION['DN-CONST.PBverifyWS'] . '/hello-world');

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);

    // Define the headers
    $headers = array();
    $headers[] = "Accept: application/json";
    $headers[] = "Content-Type: multipart/form-data";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Define the form fields and their values
    $postFields = array(
        'memberkey' => $_SESSION['DN-CONST.PBMemberkey'], // Assuming this is a fixed value
        'password' => $_SESSION['DN-CONST.PBMemberPassword'], // Assuming this is a fixed value
        'consumer_details[idNumber]' => $id_number,
        'consumer_details[yourReference]' => $reference_number
    );
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);

    // Execute cURL session and fetch the response
    $response = curl_exec($ch);

    // Check for any cURL errors
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }

    // Close the cURL session
    curl_close($ch);

    // Return the response
    return $response;
}

?>

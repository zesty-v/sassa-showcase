<?php

require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-const.php');

function dn_authenticate() {

    // Initialize cURL session
    $curl = curl_init($_SESSION['DN-CONST.PBverifyWS'] . "/authenticate");

    // Set cURL options
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'accept: application/json',
        'Content-Type: multipart/form-data'
    ));

    // Form data
    $formData = array(
        'memberkey' => $_SESSION['DN-CONST.PBMemberkey'],
        'password' => $_SESSION['DN-CONST.PBMemberPassword']
    );

    // Attach form data
    curl_setopt($curl, CURLOPT_POSTFIELDS, $formData);

    // Execute cURL session
    $responseData = curl_exec($curl);

    // Check if any error occurred
    if(curl_errno($curl)){
        echo 'Curl error: ' . curl_error($curl);
    }

    // Close cURL session
    curl_close($curl);

    // TODO: Remove this!!!!....when the API's are accissible.
    return true;

    // Check response status
    if (isset($responseData['Status']) && ($responseData['Status'] == 'Success' || $responseData['Status'] == 'Failure')) {
        return true;
    } else {
        
        return false;
    }
}
?>
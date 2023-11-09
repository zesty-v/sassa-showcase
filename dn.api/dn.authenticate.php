<?php

$url = 'https://veriid.com/PBVerify/webservice/authenticate';

// Initialize cURL session
$ch = curl_init($url);

// Data to be sent via POST
$postData = [
    'memberkey' => 'qwe',
    'password' => 'qwe'
];

// Convert postData array into a cURL POST fields
$encodedData = array();
foreach ($postData as $name => $value) {
    $encodedData[] = curl_file_create($value, null, $name);
}
$postData = $encodedData;

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
// Add headers
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'accept: application/json',
    'Content-Type: multipart/form-data'
]);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    throw new Exception(curl_error($ch));
}

// Close cURL session
curl_close($ch);

// Print the response
echo $response;

?>
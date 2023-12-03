<?php

function sendSms($message, $to) {
    
    $api_key = 'ac70c746-7ec9-4a45-aa2d-479f4be1aa78'
    $url = 'https://api.sms.to/sms/send';

    $data = array(
        'message' => $message,
        'to' => $to,
        'bypass_optout' => true,
        'sender_id' => 'SASSA',
        'callback_url' => '',
    );

    $headers = array(
        'Authorization: Bearer ' . $api_key,
        'Content-Type: application/json',
    );

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

// Example usage:
$message = "This is test and \n this is a new line";
$to = '+27815592853';

$response = sendSms($message, $to);

// Handle the response as needed
echo $response;

?>
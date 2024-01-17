<?php

function sendSms($message, $to) {
    
    $api_key = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwczovL2F1dGg6ODA4MC9hcGkvdjEvdXNlcnMvYXBpL2tleXMvZ2VuZXJhdGUiLCJpYXQiOjE3MDE2Mjc0MjIsIm5iZiI6MTcwMTYyNzQyMiwianRpIjoicWoxZExoRmltdWJuMjgwdSIsInN1YiI6NDM0ODQwLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.ff5xGI91B5e2-jVP-DHXVEevNZY6xz5WFW0M0OR3BEA';
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
// $message = "This is test and \n this is a new line";
// $to = '+27815592853';

// $response = sendSms($message, $to);

// Handle the response as needed
// echo $response;

?>
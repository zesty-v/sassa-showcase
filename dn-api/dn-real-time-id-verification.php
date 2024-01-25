<?php

function dn_realtime_id_verification($id_number, $reference_number) {

    if (USE_DN_API) {

        // Initialize cURL session
        $ch = curl_init($_SESSION['DN-CONST.PBverifyWS'] . '/pbverify-real-time-id-verification');

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
            'memberkey' => $_SESSION['DN-CONST.PBMemberkey'], 
            'password' => $_SESSION['DN-CONST.PBMemberPassword'], 
            'consumer_details[idNumber]' => $id_number,
            'consumer_details[yourReference]' => $reference_number
        );
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);

        // Execute cURL session and fetch the response
        $response = curl_exec($ch);

        // Check for any cURL errors
        if (curl_errno($ch)) {
            $response = '';
            echo 'Error:' . curl_error($ch);
        }

        // Close the cURL session
        curl_close($ch);

        // Return the response
        return $response;

    } else {
        $jsonString = '{
            "Status": "Success",
            "realTimeResults": {
                "traceId": 23408771,
                "idNumber": "7110055084081",
                "haIdno": "7110055084081",
                "idnoMatchStatus": "Matched",
                "iDBookIssuedDate": "1994-08-01",
                "identityDocumentType": "ID Book",
                "idCardInd": "No",
                "idCardDate": "",
                "idBlocked": "",
                "firstNames": "Sytze",
                "surName": "Visser",
                "dob": "1971-10-05",
                "age": 52,
                "gender": "Male",
                "citizenship": "South African",
                "countryofBirth": "South Africa",
                "deceasedStatus": "Alive",
                "deceasedDate": "",
                "deathPlace": "",
                "causeOfDeath": "",
                "maritalStatus": "MARRIED",
                "marriageDate": "1997-11-29"
            }
        }';
        
        $response = json_decode($jsonString);
        return $response;
        
    }

}

?>

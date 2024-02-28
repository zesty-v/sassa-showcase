<?php

function dn_profile_id_verification($id_number, $reference_number) {
    
    if (USE_DN_API) {
        
        // Initialize cURL session
        $ch = curl_init($_SESSION['DN-CONST.PBverifyWS'] . '/pbverify-profile-id-verification');

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

        // Check for any cURL errors.
        if (curl_errno($ch)) {
            $response = '';
            echo 'Error:' . curl_error($ch);
        }

        // Close the cURL session
        curl_close($ch);

        // Return the response
        return $response;

    } else {
        
        switch(str_replace(' ', '', $id_number)) {
            case '7110055084081':
                $jsonString = '{
                    "Status": "Success",
                    "idProfile": {
                        "traceId": 10286383,
                        "idNumber": "7110055084081",
                        "firstNames": "Sytze",
                        "surName": "Visser",
                        "dob": "1971-10-05",
                        "age": 52,
                        "gender": "Male",
                        "citizenship": "South African",
                        "status": "1",
                        "dateOfIssue": "2001-11-13T00:00:00+02:00",
                        "deathDate": [],
                        "deathPlace": ""
                        }
                    }';
                    break;
            case '0407051274147':
                $jsonString = '{
                    "Status": "Success",
                    "idProfile": {
                        "traceId": 10286383,
                        "idNumber": "0407051274147",
                        "firstNames": "Marley",
                        "surName": "Sherman",
                        "dob": "1983-07-06",
                        "age": 41,
                        "gender": "Female",
                        "citizenship": "South African",
                        "status": "1",
                        "dateOfIssue": "2001-11-13T00:00:00+02:00",
                        "deathDate": [],
                        "deathPlace": ""
                        }
                    }';
                    break;
            case '0401113432181':
                $jsonString = '{
                    "Status": "Success",
                    "idProfile": {
                        "traceId":  10286383,
                        "idNumber": "0401113432181",
                        "firstNames": "Mariah",
                        "surName": "Dyer",
                        "dob": "2004-01-11",
                        "age": 19,
                        "gender": "Female",
                        "citizenship": "South African",
                        "status": "1",
                        "dateOfIssue": "2001-11-13T00:00:00+02:00",
                        "deathDate": [],
                        "deathPlace": ""
                        }
                    }';
                    break;
            case '9304220005158':
                $jsonString = '{
                    "Status": "Success",
                    "idProfile": {
                        "traceId": 10286383,
                        "idNumber": "9304220005158",
                        "firstNames": "Kaila",
                        "surName": "Knox",
                        "dob": "1993-04-22",
                        "age": 30,
                        "gender": "Female",
                        "citizenship": "South African",
                        "status": "1",
                        "dateOfIssue": "2001-11-13T00:00:00+02:00",
                        "deathDate": [],
                        "deathPlace": ""
                        }
                    }';
                    break;
            case '9012065008167':
                $jsonString = '{
                    "Status": "Success",
                    "idProfile": {
                        "traceId": 10286383,
                        "idNumber": "9012065008167",
                        "firstNames": "Hadassah",
                        "surName": "Salazar",
                        "dob": "1990-12-06",
                        "age": 23,
                        "gender": "Male",
                        "citizenship": "South African",
                        "status": "1",
                        "dateOfIssue": "2001-11-13T00:00:00+02:00",
                        "deathDate": [],
                        "deathPlace": ""
                        }
                    }';
                    break;
            case '8005080056089':
                $jsonString = '{
                    "Status": "Success",
                    "idProfile": {
                        "traceId": 10286383,
                        "idNumber": "8005080056089",
                        "firstNames": "Virginia",
                        "surName": "Kunene",
                        "dob": "1980-05-08",
                        "age": 43,
                        "gender": "Female",
                        "citizenship": "South African",
                        "status": "1",
                        "dateOfIssue": "2001-11-13T00:00:00+02:00",
                        "deathDate": [],
                        "deathPlace": ""
                        }
                    }';
                    break;
            case '8004305003018':
                $jsonString = '{
                    "Status": "Success",
                    "idProfile": {
                        "traceId": 10286383,
                        "idNumber": "8004305003018",
                        "firstNames": "Tumelo",
                        "surName": "Magubane",
                        "dob": "1980-04-30",
                        "age": 43,
                        "gender": "Male",
                        "citizenship": "South African",
                        "status": "1",
                        "dateOfIssue": "2001-11-13T00:00:00+02:00",
                        "deathDate": [],
                        "deathPlace": ""
                        }
                    }';
                    break;
            case '8905310088176':
                $jsonString = '{
                    "Status": "Success",
                    "idProfile": {
                        "traceId": 10286383,
                        "idNumber": "8905310088176",
                        "firstNames": "Rorisang",
                        "surName": "Mabizela",
                        "dob": "1989-05-31",
                        "age": 33,
                        "gender": "Female",
                        "citizenship": "South African",
                        "status": "1",
                        "dateOfIssue": "2001-11-13T00:00:00+02:00",
                        "deathDate": [],
                        "deathPlace": ""
                        }
                    }';
                    break;
            default:
                return;
        }
                
        $response = json_decode($jsonString);
        return $response;
    
    }

}

?>

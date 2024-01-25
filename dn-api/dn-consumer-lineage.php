<?php

function dn_consumer_lineage($id_number, $reference_number) {
    
    if (USE_DN_API) {
        // Initialize cURL session
        $ch = curl_init($_SESSION['DN-CONST.PBverifyWS'] . '/datanamix-consumer-lineage');

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

    } else {
        $jsonString = '{
                      "Status": "Success",
                      "Result": {
                        "Consumers": {
                          "Consumer": [
                            {
                              "RealTimeIDV": {
                                "InputIDNO": "7110055084081",
                                "HAIDNO": "7110055084081",
                                "IDNOMatchStatus": "Matched",
                                "HANames": "JOE JACKSON",
                                "HASurname": "SOAP",
                                "HAGender": "Male",
                                "HADateOfBirth": "1990-01-19",
                                "HABirthPlace": "SOUTH AFRICA",
                                "HADeceasedStatus": "Alive",
                                "HADeceasedDate": "",
                                "DeathPlace": "",
                                "CauseOfDeath": "",
                                "HAMarriageStatus": "MARRIED",
                                "HAMarriageDate": "2016-01-21",
                                "HAIDBookIssuedDate": "2008-10-13",
                                "IdCardInd": "Yes",
                                "HAIDCardDate": "2016-11-21",
                                "HAIDSequenceNumber": "",
                                "HAIDNumberBlocked": "NO",
                                "HASpouseID": "0000000000001",
                                "HAChild1ID": "1700000000001",
                                "HAChild1Status": "ALIVE",
                                "HAChild2ID": "",
                                "HAChild2Status": "",
                                "HAChild3ID": "",
                                "HAChild3Status": "",
                                "HAChild4ID": "",
                                "HAChild4Status": "",
                                "HAChild5ID": "",
                                "HAChild5Status": "",
                                "HAChild6ID": "",
                                "HAChild6Status": "",
                                "HAChild7ID": "",
                                "HAChild7Status": "",
                                "HAChild8ID": "",
                                "HAChild8Status": "",
                                "HAChild9ID": "",
                                "HAChild9Status": "",
                                "HAChild10ID": "",
                                "HAChild10Status": "",
                                "HAChild11ID": "",
                                "HAChild11Status": "",
                                "HAChild12ID": "",
                                "HAChild12Status": "",
                                "HAChild13ID": "",
                                "HAChild13Status": "",
                                "HAChild14ID": "",
                                "HAChild14Status": "",
                                "HAChild15ID": "",
                                "HAChild15Status": "",
                                "HAChild16ID": "",
                                "HAChild16Status": "",
                                "HAChild17ID": "",
                                "HAChild17Status": "",
                                "HAChild18ID": "",
                                "HAChild18Status": "",
                                "HAChild19ID": "",
                                "HAChild19Status": "",
                                "HAChild20ID": "",
                                "HAChild20Status": "",
                                "HAChild21ID": "",
                                "HAChild21Status": "",
                                "HAMotherID": "0",
                                "HAFatherID": "0",
                                "HAErrorDescription": ""
                              },
                              "Relationship": {
                                "Relation": "Master"
                              },
                              "ConsumerEmailHistory": {
                                "DisplayText": "Consumer Email History",
                                "EmailAddress": "joe@test.com",
                                "LastUpdatedDate": "2014-11-30"
                              },
                              "ConsumerAddressHistory": [
                                {
                                  "DisplayText": "Consumer Address History",
                                  "ConsumerAddressID": "000000112",
                                  "AddressType": "Residential",
                                  "AddressTypeInd": "R",
                                  "Address1": "12 LONG RD",
                                  "Address2": "",
                                  "Address3": "",
                                  "Address4": "",
                                  "PostalCode": "2000",
                                  "Address": " 12 HOUSE RD 0000",
                                  "LastUpdatedDate": "2021-09-29",
                                  "FirstReportedDate": "2002-11-13"
                                },
                                {
                                  "DisplayText": "Consumer Address History",
                                  "ConsumerAddressID": "000000113",
                                  "AddressType": "Postal",
                                  "AddressTypeInd": "P",
                                  "Address1": "770 BAR CRESCENT",
                                  "Address2": "",
                                  "Address3": "",
                                  "Address4": "",
                                  "PostalCode": "1192",
                                  "Address": "770 BAR CRESCENT 1192",
                                  "LastUpdatedDate": "2021-09-29",
                                  "FirstReportedDate": "2002-11-13"
                                }
                              ],
                              "ConsumerTelephoneHistory": [
                                {
                                  "DisplayText": "Consumer Telephone History",
                                  "ConsumerTelephoneID": "123456789",
                                  "TelephoneType": "Cellular",
                                  "TelephoneTypeInd": "C",
                                  "TelCode": "083",
                                  "TelNo": "6400000",
                                  "TelephoneNo": "0836400000",
                                  "EmailAddress": "",
                                  "LastUpdatedDate": "2020-08-21",
                                  "FirstReportedDate": "2002-11-13"
                                },
                                {
                                  "DisplayText": "Consumer Telephone History",
                                  "ConsumerTelephoneID": "123456783",
                                  "TelephoneType": "Work",
                                  "TelephoneTypeInd": "W",
                                  "TelCode": "012",
                                  "TelNo": "1210258",
                                  "TelephoneNo": "0121210258",
                                  "EmailAddress": "",
                                  "LastUpdatedDate": "2020-08-21",
                                  "FirstReportedDate": "2017-04-28"
                                }
                              ],
                              "ConsumerEmploymentHistory": [
                                {
                                  "DisplayText": "Consumer Employment History",
                                  "EmployerDetail": "DATANAMIX PTY LTD",
                                  "Designation": "",
                                  "LastUpdatedDate": "2015-07-11",
                                  "FirstReportedDate": "2002-11-13"
                                },
                                {
                                  "DisplayText": "Consumer Employment History",
                                  "EmployerDetail": "DATANAMIX LTD",
                                  "Designation": "",
                                  "LastUpdatedDate": "2013-01-20",
                                  "FirstReportedDate": "2002-11-13"
                                }
                              ],
                              "BioMetricVerificationResult": {
                                "ApplicationErrors": "",
                                "Base64StringJpeg2000Image": "iVBORw0KGgoAAAANSUhEUgAAAh8AAAK5CA.............",
                                "HasImage": "True",
                                "TmStamp": "2023-06-21 10:05:36 AM",
                                "TransactionNumber": "2306000000000",
                                "VerificationErrors": "",
                                "SubscriberEnquiryID": "230600",
                                "HanisIDMatch": "Matched"
                              }
                            },
                            {
                              "RealTimeIDV": {
                                "InputIDNO": "0000000000001",
                                "HAIDNO": "0000000000001",
                                "IDNOMatchStatus": "Matched",
                                "HANames": "JACKIE",
                                "HASurname": "SOAP",
                                "HAGender": "Female",
                                "HADateOfBirth": "1988-03-20",
                                "HABirthPlace": "SOUTH AFRICA",
                                "HADeceasedStatus": "Alive",
                                "HADeceasedDate": "",
                                "DeathPlace": "",
                                "CauseOfDeath": "",
                                "HAMarriageStatus": "MARRIED",
                                "HAMarriageDate": "2016-01-21",
                                "HAIDBookIssuedDate": "2007-06-19",
                                "IdCardInd": "Yes",
                                "HAIDCardDate": "2016-11-10",
                                "HAIDSequenceNumber": "",
                                "HAIDNumberBlocked": "NO",
                                "HASpouseID": "0000000000000",
                                "HAChild1ID": "1700000000001",
                                "HAChild1Status": "ALIVE",
                                "HAChild2ID": "",
                                "HAChild2Status": "",
                                "HAChild3ID": "",
                                "HAChild3Status": "",
                                "HAChild4ID": "",
                                "HAChild4Status": "",
                                "HAChild5ID": "",
                                "HAChild5Status": "",
                                "HAChild6ID": "",
                                "HAChild6Status": "",
                                "HAChild7ID": "",
                                "HAChild7Status": "",
                                "HAChild8ID": "",
                                "HAChild8Status": "",
                                "HAChild9ID": "",
                                "HAChild9Status": "",
                                "HAChild10ID": "",
                                "HAChild10Status": "",
                                "HAChild11ID": "",
                                "HAChild11Status": "",
                                "HAChild12ID": "",
                                "HAChild12Status": "",
                                "HAChild13ID": "",
                                "HAChild13Status": "",
                                "HAChild14ID": "",
                                "HAChild14Status": "",
                                "HAChild15ID": "",
                                "HAChild15Status": "",
                                "HAChild16ID": "",
                                "HAChild16Status": "",
                                "HAChild17ID": "",
                                "HAChild17Status": "",
                                "HAChild18ID": "",
                                "HAChild18Status": "",
                                "HAChild19ID": "",
                                "HAChild19Status": "",
                                "HAChild20ID": "",
                                "HAChild20Status": "",
                                "HAChild21ID": "",
                                "HAChild21Status": "",
                                "HAMotherID": "0",
                                "HAFatherID": "0",
                                "HAErrorDescription": ""
                              },
                              "Relationship": {
                                "Relation": "Spouse"
                              },
                              "ConsumerAddressHistory": [
                                {
                                  "DisplayText": "Consumer Telephone History",
                                  "ConsumerTelephoneID": "123456789",
                                  "TelephoneType": "Cellular",
                                  "TelephoneTypeInd": "C",
                                  "TelCode": "083",
                                  "TelNo": "6400000",
                                  "TelephoneNo": "0836400000",
                                  "EmailAddress": "",
                                  "LastUpdatedDate": "2020-08-21",
                                  "FirstReportedDate": "2002-11-13"
                                },
                                {
                                  "DisplayText": "Consumer Telephone History",
                                  "ConsumerTelephoneID": "123456783",
                                  "TelephoneType": "Work",
                                  "TelephoneTypeInd": "W",
                                  "TelCode": "012",
                                  "TelNo": "1210258",
                                  "TelephoneNo": "0121210258",
                                  "EmailAddress": "",
                                  "LastUpdatedDate": "2020-08-21",
                                  "FirstReportedDate": "2017-04-28"
                                }
                              ],
                              "ConsumerEmploymentHistory": {
                                "DisplayText": "Consumer Employment History",
                                "EmployerDetail": "APPLE PROPERTIES",
                                "Designation": "",
                                "LastUpdatedDate": "2014-04-26",
                                "FirstReportedDate": "2012-02-27"
                              },
                              "BioMetricVerificationResult": {
                                "ApplicationErrors": "",
                                "Base64StringJpeg2000Image": "iVBORw0KGgoAAAANSUhEUgAAAh8AAAK5CAIAAACQett1AAAABG...........",
                                "HasImage": "True",
                                "TmStamp": "2023-06-21 10:05:47 AM",
                                "TransactionNumber": "2306219340352",
                                "VerificationErrors": "",
                                "SubscriberEnquiryID": "58251247",
                                "HanisIDMatch": "Matched"
                              }
                            },
                            {
                              "RealTimeIDV": {
                                "InputIDNO": "1700000000001",
                                "HAIDNO": "1700000000001",
                                "IDNOMatchStatus": "Matched",
                                "HANames": "JEAN",
                                "HASurname": "VISSER",
                                "HAGender": "Male",
                                "HADateOfBirth": "2017-01-01",
                                "HABirthPlace": "SOUTH AFRICA",
                                "HADeceasedStatus": "Alive",
                                "HADeceasedDate": "",
                                "DeathPlace": "",
                                "CauseOfDeath": "",
                                "HAMarriageStatus": "SINGLE",
                                "HAMarriageDate": "",
                                "HAIDBookIssuedDate": "",
                                "IdCardInd": "No",
                                "HAIDCardDate": "",
                                "HAIDSequenceNumber": "",
                                "HAIDNumberBlocked": "NO",
                                "HASpouseID": "",
                                "HAChild1ID": "",
                                "HAChild1Status": "",
                                "HAChild2ID": "",
                                "HAChild2Status": "",
                                "HAChild3ID": "",
                                "HAChild3Status": "",
                                "HAChild4ID": "",
                                "HAChild4Status": "",
                                "HAChild5ID": "",
                                "HAChild5Status": "",
                                "HAChild6ID": "",
                                "HAChild6Status": "",
                                "HAChild7ID": "",
                                "HAChild7Status": "",
                                "HAChild8ID": "",
                                "HAChild8Status": "",
                                "HAChild9ID": "",
                                "HAChild9Status": "",
                                "HAChild10ID": "",
                                "HAChild10Status": "",
                                "HAChild11ID": "",
                                "HAChild11Status": "",
                                "HAChild12ID": "",
                                "HAChild12Status": "",
                                "HAChild13ID": "",
                                "HAChild13Status": "",
                                "HAChild14ID": "",
                                "HAChild14Status": "",
                                "HAChild15ID": "",
                                "HAChild15Status": "",
                                "HAChild16ID": "",
                                "HAChild16Status": "",
                                "HAChild17ID": "",
                                "HAChild17Status": "",
                                "HAChild18ID": "",
                                "HAChild18Status": "",
                                "HAChild19ID": "",
                                "HAChild19Status": "",
                                "HAChild20ID": "",
                                "HAChild20Status": "",
                                "HAChild21ID": "",
                                "HAChild21Status": "",
                                "HAMotherID": "0000000000001",
                                "HAFatherID": "0000000000000",
                                "HAErrorDescription": ""
                              },
                              "Relationship": {
                                "Relation": "Child"
                              },
                              "BioMetricVerificationResult": {
                                "ApplicationErrors": "",
                                "Base64StringJpeg2000Image": "",
                                "HasImage": "False",
                                "TmStamp": "2023-06-21 10:05:55 AM",
                                "TransactionNumber": "2306219340923",
                                "VerificationErrors": "No JPEG 2000 photograph",
                                "SubscriberEnquiryID": "58251247",
                                "HanisIDMatch": "Matched"
                              }
                            },
                            {
                              "RealTimeIDV": {
                                "InputIDNO": "1700000000002",
                                "HAIDNO": "1700000000002",
                                "IDNOMatchStatus": "Matched",
                                "HANames": "ANDRE",
                                "HASurname": "VISSER",
                                "HAGender": "Male",
                                "HADateOfBirth": "2017-01-01",
                                "HABirthPlace": "SOUTH AFRICA",
                                "HADeceasedStatus": "Alive",
                                "HADeceasedDate": "",
                                "DeathPlace": "",
                                "CauseOfDeath": "",
                                "HAMarriageStatus": "SINGLE",
                                "HAMarriageDate": "",
                                "HAIDBookIssuedDate": "",
                                "IdCardInd": "No",
                                "HAIDCardDate": "",
                                "HAIDSequenceNumber": "",
                                "HAIDNumberBlocked": "NO",
                                "HASpouseID": "",
                                "HAChild1ID": "",
                                "HAChild1Status": "",
                                "HAChild2ID": "",
                                "HAChild2Status": "",
                                "HAChild3ID": "",
                                "HAChild3Status": "",
                                "HAChild4ID": "",
                                "HAChild4Status": "",
                                "HAChild5ID": "",
                                "HAChild5Status": "",
                                "HAChild6ID": "",
                                "HAChild6Status": "",
                                "HAChild7ID": "",
                                "HAChild7Status": "",
                                "HAChild8ID": "",
                                "HAChild8Status": "",
                                "HAChild9ID": "",
                                "HAChild9Status": "",
                                "HAChild10ID": "",
                                "HAChild10Status": "",
                                "HAChild11ID": "",
                                "HAChild11Status": "",
                                "HAChild12ID": "",
                                "HAChild12Status": "",
                                "HAChild13ID": "",
                                "HAChild13Status": "",
                                "HAChild14ID": "",
                                "HAChild14Status": "",
                                "HAChild15ID": "",
                                "HAChild15Status": "",
                                "HAChild16ID": "",
                                "HAChild16Status": "",
                                "HAChild17ID": "",
                                "HAChild17Status": "",
                                "HAChild18ID": "",
                                "HAChild18Status": "",
                                "HAChild19ID": "",
                                "HAChild19Status": "",
                                "HAChild20ID": "",
                                "HAChild20Status": "",
                                "HAChild21ID": "",
                                "HAChild21Status": "",
                                "HAMotherID": "0000000000001",
                                "HAFatherID": "0000000000000",
                                "HAErrorDescription": ""
                              },
                              "Relationship": {
                                "Relation": "Child"
                              },
                              "BioMetricVerificationResult": {
                                "ApplicationErrors": "",
                                "Base64StringJpeg2000Image": "",
                                "HasImage": "False",
                                "TmStamp": "2023-06-21 10:05:55 AM",
                                "TransactionNumber": "2306219340923",
                                "VerificationErrors": "No JPEG 2000 photograph",
                                "SubscriberEnquiryID": "58251247",
                                "HanisIDMatch": "Matched"
                              }
                            }
                          ]
                        }
                      }
                    }';
        
        $response = json_decode($jsonString, true);
        return $response;
        
    }

}

?>

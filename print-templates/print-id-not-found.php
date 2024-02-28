<?php

function print_id_not_found_letter() {

    // All standard page includes
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/standard-page-requires.php');
    require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();

    $idnumber = $_SESSION['curr-id']; 
    $curr_date = date("d F Y");
    $appType = $_SESSION['application-type'];
    $curr_time = date("H:i:s", time());

    // Load html template
    $template = file_get_contents(__DIR__ . '/print-id-not-found.html');

    // Substitute fields in the template with session vars.
    $htmlContent = str_replace('{{idnumber}}', $idnumber, $template);
    $htmlContent = str_replace('{{current-date}}', $curr_date, $htmlContent);
    $htmlContent = str_replace('{{current-time}}', $curr_time, $htmlContent);
    $htmlContent = str_replace('{{application-type}}', $appType, $htmlContent);

    // Put into HTML
    $mpdf->WriteHTML($htmlContent);

    // Get a timestamp for the file name.
    $timestamp = new DateTime();
    $formattedFilename = str_replace(' ', '', $idnumber) . '.' . $timestamp->format('Y-m-d+H:i:s.v');

    // Save file for DocuWare to index.
    $mpdf->Output($_SERVER['DOCUMENT_ROOT'] . "/DW-FILES/$formattedFilename", \Mpdf\Output\Destination::FILE);
    ob_clean(); 

    // Output file to browser.
    $mpdf->Output("$formattedFilename", 'I'); 

    writeAuditlog($_SESSION['userName'], $_SESSION['curr-id'], $appType, 'Printing client letter for Home Affairs as ID is incorrect.');

    // Send an SMS to the client too.
    $message = '*DEMO* Grant application applies. Please take your ID to Home Affairs for verification. *DEMO*';
    $to = $_SESSION['cellNo'];
    sendSms($message, $to);

    // Write event to audit log.
    writeAuditlog($_SESSION['userName'], $_SESSION['curr-id'], $appType, 'SMS:' . $message);

}

    print_id_not_found_letter();


?>

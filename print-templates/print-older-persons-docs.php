<?php

function print_older_persons_docs_letter() {
    
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/standard-page-requires.php');
    require_once '../vendor/autoload.php';

    $mpdf = new \Mpdf\Mpdf();

    $name = $_SESSION['name'];
    $surname = $_SESSION['surname'];
    $idnumber = $_SESSION['curr-id']; 
    $curr_date = date("d F Y");
    $curr_time = date("H:i:s", time());


    // Load html template
    $template = file_get_contents(__DIR__ . '/print-older-persons-docs.html');

    // Substitute fields in the template with session vars.
    $htmlContent = str_replace('{{idnumber}}', $idnumber, $template);
    $htmlContent = str_replace('{{name}}', $name, $htmlContent);
    $htmlContent = str_replace('{{surname}}', $surname, $htmlContent);
    $htmlContent = str_replace('{{current-date}}', $curr_date, $htmlContent);
    $htmlContent = str_replace('{{current-time}}', $curr_time, $htmlContent);

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

    writeAuditlog($_SESSION['userName'], $_SESSION['curr-id'], "Older Persons Grant", 'Printing client letter for outstanding Older Persons Grant docs.');

    // Send an SMS to the client too.
    $message = '*DEMO* Please obtain the outstanding documentation and present to the SASSA for the application for an Older Persons Grant. *DEMO*';
    $to = $_SESSION['cellNo'];
    sendSms($message, $to);

    // Write event to audit log.
    writeAuditlog($_SESSION['userName'], $_SESSION['curr-id'], "Older Persons Grant", 'SMS:' . $message);

}

    print_older_persons_docs_letter();

?>

<?php

session_start();

require_once '../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$idnumber = $_SESSION['curr-id']; 
$curr_date = date("d F Y");
$applicationtype = $_SESSION['application-type'];
 
// Load html template
$template = file_get_contents(__DIR__ . '/print-id-not-found.html');

// Substitute fields in the template with session vars.
$htmlContent = str_replace('{{idnumber}}', $idnumber, $template);
$htmlContent = str_replace('{{current-date}}', $curr_date, $htmlContent);
$htmlContent = str_replace('{{application-type}}', $applicationtype, $htmlContent);

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

?>

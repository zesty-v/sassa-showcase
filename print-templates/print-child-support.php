<?php

session_start();

require_once '../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$idnumber = $_SESSION['curr-id'];
$curr_date = date("d F Y");
 
// Load html template
$template = file_get_contents(__DIR__ . '/print-child-support.html');

// Substitute fields in the template with session vars.
$htmlContent = str_replace('{{idnumber}}', $idnumber, $template);
$htmlContent = str_replace('{{name}}', $name, $htmlContent);
$htmlContent = str_replace('{{surname}}', $surname, $htmlContent);
$htmlContent = str_replace('{{current-date}}', $curr_date, $htmlContent);

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

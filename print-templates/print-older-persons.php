<?php

require_once '../vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$idnumber = $_SESSION['curr-id'];
$curr_date = date("d F Y");

// Load html template
$template = file_get_contents(__DIR__ . '/print-older-persons.html');

// Substitute fields in the template with session vars.
$htmlContent = str_replace('{{idnumber}}', $surname, $template);
$htmlContent = str_replace('{{name}}', $name, $htmlContent);
$htmlContent = str_replace('{{surname}}', $surname, $htmlContent);
$htmlContent = str_replace('{{current-date}}', $curr_date, $htmlContent);

// Put into file
$mpdf->WriteHTML($htmlContent);

// Output file to browser.
$mpdf->Output('example.pdf', 'I');

// Save file for DocuWare to index.
$mpdf->Output('example.pdf', 'I');


?>

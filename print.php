<?php

// Require the autoload file generated by Composer
require_once __DIR__ . '/vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);


// Create an instance of the Mpdf\Mpdf class
$mpdf = new \Mpdf\Mpdf;

// Your HTML content
// $htmlContent = '<h1>Hello World</h1><p>This is a test PDF.</p>';
$htmlContent = '<html>

<p> Some text here...</p>

';
// Write the HTML content to the PDF
$mpdf->WriteHTML($htmlContent);

// Output the PDF to a file
$mpdf->Output('example.pdf', 'I');



?>
<?php

    require($_SERVER['DOCUMENT_ROOT'] . '/const-site.php');
    sleep(CONST_PAGE_DELAY);

    require($_SERVER['DOCUMENT_ROOT'] . '/page-man.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-active-check.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dw-api/dw-active-check.php');


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idNumber = $_POST['idNumber'];
        
        echo 'The ID received is: ' . $idNumber;
        
    }


?>
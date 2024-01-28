<?php
    
    require($_SERVER['DOCUMENT_ROOT'] . '/page-man.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/const-site.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/db/dbfunctions.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/smsto-api/sms-send.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-active-check.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dw-api/dw-active-check.php');    
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-consumer-lineage.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-real-time-id-verification.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-profile-id-verification.php');
    require($_SERVER['DOCUMENT_ROOT'] . '/dn-api/dn-photo-id-verification.php');

?>
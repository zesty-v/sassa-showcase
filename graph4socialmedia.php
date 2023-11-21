<?php
// Check if SSL is enabled
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";

// Get the host
$host = $_SERVER['HTTP_HOST'];

// Combine to get the full URL
$fullURL = $protocol . $host;
?>

        <meta property="og:url" content="<?php echo $fullURL;?>" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="SASSA Demo Site" />
        <meta property="og:description" content="Demo of Datanamics and Docuware for SASSA Demo" />
        <meta property="og:image" content="<?php echo $protocol . $host ?>/images/sassa-socialmedia.png" />

<?php
    // Version 1.0.1
    header('Content-type: application/json');
    header('Access-Control-Allow-Origin: *');
    $uppercaseString = strtoupper($_GET['message']);
    echo "{\"message\": \"${uppercaseString}\"}";
?>

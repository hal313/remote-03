<?php
    header('Content-type: application/json');
    header('Access-Control-Allow-Origin: *');
    $uppercaseString = strtoupper($_GET['message']);
    echo "{\"message\": \"${uppercaseString}\"}";
?>
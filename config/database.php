<?php
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'php_secret');
    define('DB_PAS', 'musa1212$');
    define('DB_USER', 'musa');

    //create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PAS, DB_NAME);
    if($conn->connect_error){
        die('Connection error'. $conn->connect_error);
    }
    echo 'CONNECTED';
?>
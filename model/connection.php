<?php

require_once ROOT_DIR . '/config/config.php';

function GetConnection(){
    
    // Create connection
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";

    return $conn;
}
